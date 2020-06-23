<?php
namespace App\SearchBuilders;

use App\Models\Category;

class ProductSearchBuilder
{
    // 初始化查询
    protected $params = [
        'index' => 'products',
        'body' => [
            'query' => [
                'bool' => [
                    'filter' => [],
                    'must' => [],
                ],
            ],
        ],
    ];

    // 添加分页查询
    public function paginate($size, $page)
    {
        $this->params['body']['from'] = ($page - 1) * $size;
        $this->params['body']['size'] = $size;

        return $this;
    }

    // 筛选上架状态的商品
    public function onSale()
    {
        $this->params['body']['query']['bool']['filter'][] = ['term' => ['on_sale' => true]];

        return $this;
    }

    // 按类目筛选商品
    public function category(Category $category)
    {
        // 如果这是一个父类目
        if ($category->is_directory) {
            // 如果是一个父类目，则使用 category_path 来筛选
            $this->params['body']['query']['bool']['filter'][] = [
                'prefix' => ['category_path' => $category->path.$category->id.'-'],
            ];
        } else {
            // 否则直接通过 category_id 筛选
            $this->params['body']['query']['bool']['filter'][] = ['term' => ['category_id' => $category->id]];
        }

        return $this;
    }

    // 添加搜索词
    public function keywords($keywords)
    {
        // 如果参数不是数组则转为数组
        $keywords = is_array($keywords) ? $keywords : [$keywords];
        // 遍历搜索词数组，分别添加到 must 查询中
        foreach ($keywords as $keyword) {
            $this->params['body']['query']['bool']['must'][] = [
                'multi_match' => [
                    'query' => $keyword,
                    'fields' => [
                        'title^3',
                        'long_title^2',
                        'category^2',//类目名称
                        'description',
                        'skus_title',
                        'skus_description',
                        'properties_value',
                    ],
                ],
            ];
        }

        return $this;
    }

    // 分面搜索的聚合
    public function aggregateProperties()
    {
        $this->params['body']['aggs'] = [
            'properties' => [
                'nested' => [
                    'path' => 'properties',
                ],
                'aggs'   => [
                    'properties' => [
                        'terms' => [
                            'field' => 'properties.name',
                        ],
                        // 第三层聚合
                        'aggs'  => [
                            // 聚合的名称
                            'value' => [
                                'terms' => [
                                    'field' => 'properties.value',
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ];

        return $this;
    }

    // 添加一个按商品属性筛选的条件
    public function propertyFilter($name, $value, $type = 'filter')
    {
        // 添加到 filter 类型中
        $this->params['body']['query']['bool'][$type][] = [
            // 由于我们要筛选的是 nested 类型下的属性，因此需要用 nested 查询
            'nested' => [
                // 指明 nested 字段
                'path' => 'properties',
                'query' => [
                    ['term' => ['properties.search_value' => $name.':'.$value]],
                ]
            ]
        ];

        return $this;
    }

    // 添加排序
    public function orderBy($field, $direction)
    {
        if (!isset($this->params['body']['sort'])) {
            $this->params['body']['sort'] = [];
        }
        $this->params['body']['sort'][] = [$field => $direction];

        return $this;
    }

    // 设置 minimum_should_match 参数
    public function minShouldMatch($count)
    {
        $this->params['body']['query']['bool']['minimum_should_match'] = (int)$count;
    }

    // 返回构造好的查询参数
    public function getParams()
    {
        return $this->params;
    }

}