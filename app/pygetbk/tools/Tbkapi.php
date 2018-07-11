<?php
/**
 * Created by PhpStorm.
 * User: cary
 * Date: 2018/7/2
 * Time: 下午3:50
 */
namespace app\pygetbk\tools;

use ETaobao\Factory;

$mm = 'mm_45645239_46228008_774520896';



//        'fields' => 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick',
$param = [
    'q' => '手机',
    'page_no' => '1',
    'page_size' => '5',
    'type'=> '-1',
    'adzone_id' => '774520896'
];


class Tbkapi {
    // 淘宝分类列表链接
    // https://www.taobao.com/markets/tbhome/market-list?spm=a21bo.7925171.191431.2.a17a6b70piqLzy

    private static function get_app() {
        $tbk = config('tbk');
        $config = ['appkey' => $tbk['tbk_appkey'],
            'secretKey' => $tbk['tbk_secretKey'], 'format' => 'json', 'sandbox' => false];
        return $app = Factory::Tbk($config);
    }



    public static function get_bg_coupon() {
        // taobao.tbk.dg.item.coupon.get (好券清单API【导购】)
        $app = static::get_app();
        // 'fields' => 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick',
        $param = ['q' => '内增高', 'page_no' => '1', 'page_size' => '5', 'type'=> '-1', 'adzone_id' => '774520896'];
        $res = $app->dg->getCoupon($param);
        return $res;
        //$res = $app->dg->getCoupon($param);
    }





}