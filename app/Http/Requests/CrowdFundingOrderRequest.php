<?php

namespace App\Http\Requests;

use App\Models\CrowdfundingProduct;
use App\Models\Product;
use App\Models\ProductSku;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CrowdFundingOrderRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sku_id' => [
                 'required',
                 function ($attribute, $value, $fail) {
                     if (!$sku = ProductSku::find($value)) {
                         $fail('该商品不存在');
                         return;
                     }
                     // 众筹商品下单接口仅支持众筹商品的 SKU
                     if ($sku->product->type !== Product::TYPE_CROWDFUNDING) {
                         $fail('该商品不支持众筹');
                         return;
                     }
                     if (!$sku->product->on_sale) {
                         $fail('该商品未上架');
                         return;
                     }
                     // 还需要判断众筹本身的状态，如果不是众筹中则无法下单
                     if ($sku->product->crowdfunding->status !== CrowdfundingProduct::STATUS_FUNDING) {
                         $fail('该商品众筹已结束');
                         return;
                     }

                     if ($sku->stock === 0) {
                         $fail('该商品已售完');
                         return;
                     }
                     if ($this->input('amount') > 0 && $this->input('amount') > $sku->stock) {
                         $fail('该商品库存不足');
                         return;
                     }
                 }
            ],
            'amount' => ['required', 'integer', 'min:1'],
            'address_id' => [
                'required',
                Rule::exists('user_addresses', 'id')->where('user_id', $this->user()->id)
            ],
        ];
    }
}
