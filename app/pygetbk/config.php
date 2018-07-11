<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
if (file_exists(CMF_ROOT . "data/conf/config.php")) {
    $runtimeConfig = include CMF_ROOT . "data/conf/config.php";
} else {
    $runtimeConfig = [];
}
$configs = [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------
    // 淘宝客 应用
    'tbk'           => [
        'tbk_appkey'               => '24932183',
        'tbk_secretKey'            => '4d6935b36d993e09f6c8c6414d174883',
        'tbk_pid'                  => 'mm_45645239_46228008_774520896',
        'tbk_mm1'                  => '45645239',
        'tbk_mm2'                  => '46228008',
        'tbk_mm3'                  => '774520896',
    ]
];
return array_merge($configs, $runtimeConfig);