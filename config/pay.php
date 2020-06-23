<?php

return [
    'alipay' => [
        'app_id' => '2016082100305689',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAm8eMX1zlrbl8ya10nMtdWez9qiIRtEp1V2+jywmqy4ebPfp6ll3dr20psQdnIr2bSc8jKuVCXeaWL1KAK+M/lGeGfFrD9wIz1MCry4Fe2GY6WhM+9lfZKacBbkD7Rq1hBWCQkjpz3OBaA2wrkvvjXBGC8JgspPZ8UOjmLfJqPenA9/1X6uXzuiZ2E2aPmhrUnfhTTQ4GlTqARfksTwZXxaGAOFHLnJ4iyjVkPzDYzuXJYBJyE1IdlQzaF+WanfHINUOKCzxwHMZmYQqxzDo5cPFZkZFuYE+PixrSuY9R7MbNAhqTyY8KrqfNSu1AMp4pteUkjUZN3KMva2pP4nuc8QIDAQAB',
        'private_key' => 'MIIEpAIBAAKCAQEAiIr4hX31yE/dQF+5/gBV4UCvTXGYnjHrtzmFsBM0aPOhTkzvZ6nBQjycydsNmIO8zrkL9dV5Nidl9UFp4OjJzpiiYeiz141xlj2bP3rQJLOujrd1JlgM6Kp4fYJv3e9C6zS2naPs5Iz6gLolLZmuIG8OgCmMTYe92lpnPEwPyjsNQAd1VoaMo7xGg91uEoGdWJ1lp6HLTbX4j/ixKF5GaIU93SkeNBkXpilUObfvpksF2Q5C4umZYzWIQ7NbuxavpnJ4Xl8Qptd2PRodMTCUuKtvxvq5UjPfm/0/FTX8otbiEVgCh3iNuduH27AgOmByk8OL8j5GzlF8xLAf5oq3iwIDAQABAoIBAA+KWZy/6FBjHphsDLwnB586gHk8+5TNs7lH17phhS6IxAwoX3sZ7AAA7AthXhvEqqGQmBbjtAcA1u7iAg3yEL3ty1V/abCXzZy+6EOCU9xJgw2FPdUeYmG8vTfzt4235JLmjf5FIPomPYCXLxIQkqvoV+soT2qnj2khruxC7+0hPgy3+z8AQW7WsqqoerjzIPTPpo49zZdVOodivD+J3Bkkojv7HodO8/Vh3DvQNmnmLIuHlnmbBGD5doT3EY7fHaE4FwJBoouFvHKuiGAXDrF0GceAJslOznvc07huw2cy9MOz6YkeMV1S3f3FitL3cg/JfG/bxLM3rt6TbEPjpjECgYEA4+OotvKXFUg0OfxUCEXhUzmzDP3vDrF5dEZJ8BbTARgmNDaYTO7l3b8cDCV1J7a4zRn+WDl7/Ov1xA3Rh9Hwye3WwzFIWDManv3Ovteh0cb50T/vj5DSGLsky3jfPSxchNPbcE+/G4at78x+uD0G3I3IjXza3xVwAf/aanc9rDMCgYEAmWLAsmm364fen5Ufb5Dpq8QU0rY/UjXui1Y8K0hRCmKAfNhRpkBg7rpoEtvJnsf6nFsdcF6gPDIh0lYFTDUuHf75ztYY7IL3bX1zSCg5PboZ2BAof2ecv1bLxGSwIBPcjsbrNreLghKiRkAmkx0Wa0BgO6zg1D7bTH7PXWQL70kCgYBpXjP+EwCkSHRNc0vvX1AlyQHuueK0qn57spwxNHxvfxj6/1tABx2lf92aCB+5MxUTUDd312xqrzc9ZR5CbGGnHB82tSy8CzT92mCjgNRDSHrts2Ayw0VBRhZnNgYSJNbKW6KUtWqpcYYu4CCfUyg/Bhd6xAX3K9RUOFZm76dGXQKBgQCMpPVmYvPHH02t7HHnvevVmTUyxPOo8VTrJMaFNYlByXJhh4TOucdn/zrA2BG2603LouyKhenNaHaExGWVLEo+LPdohf5SmABCwD490swx4nwiFybbM+mRtQeg7GZm829Q5+rzwDdGrMlpOxdj288bxuq2rV12oLA7IygHTV54KQKBgQCKntAX/aXY5rRmyC8ofxg6A0uyVKoA2+JOKXiFau5GAm+a0oU/a8E2X5DLR3A0y+8UKMkO8OnvBNRo+yqH6PkOUJVScTb6Cru79jFQbeGozKrLmNChywfJpDd56sCV4Luagwk9lvvN9Fxmak78e9R4y8t1g20Wv/m/8wU9jt3FUw==',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ]
    ]
];