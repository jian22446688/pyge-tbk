<?php
/**
 * Created by PhpStorm.
 * User: cary
 * Date: 2018/6/28
 * Time: 下午4:17
 */

namespace app\pygetbk\controller;


use cmf\controller\AdminBaseController;
use think\Cache;

use ETaobao\Factory;
use app\pygetbk\tools\Tbkapi;


class AdminTbkautoController extends AdminBaseController {

    /**
     * 定时处理数据
     * @adminMenu(
     *     'name'   => '定时数据',
     *     'parent' => 'pygetbk/AdminIndex/default',
     *     'display'=> true,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '定时数据',
     *     'param'  => ''
     * )
     */
    public function index() {

//        $iscah = Cache::set('aaaaaa', 'ddddsadasddddddddddd');
//        if ($iscah){
//
//            echo 's';
//        }else{
//            echo 'e';
//        }
//
//        dump($iscah); die;

        //dump(config('tbk')); die;

        return $this->fetch();
    }

    public function test() {

        $mm = 'mm_45645239_46228008_774520896';

        $config = [
            'appkey' => '24932183',
            'secretKey' => '4d6935b36d993e09f6c8c6414d174883',
            'format' => 'json',
            'sandbox' => false,
        ];
        $app = Factory::Tbk($config);
//        'fields' => 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick',
        $param = [
            'q' => '内增高',
            'page_no' => '1',
            'page_size' => '5',
            'type'=> '-1',
            'adzone_id' => '774520896'
        ];
        $res = $app->dg->getCoupon($param);

//        $va = Cache::get('aaaaa');

        dump($res);

//      http://img.alicdn.com/tfscom/i2/668577352/TB2SyYVbEz.BuNjt_j7XXX0nFXa_!!668577352.jpg_250x250.jpg

//        [0] => object(stdClass)#63 (20) {
//        ["category"] => int(30)
//        ["commission_rate"] => string(4) "9.00"
//        ["coupon_click_url"] => string(312) "https://uland.taobao.com/coupon/edetail?e=TF5wbyMdCv4GQASttHIRqUaIADzRsrkz3O61XeA640BUm%2Fg8xRLmNjo9dEpG%2FemeDglHL34DJPmT%2Fy8jtD97w8jzaeCltPZK819cieM8MLaz1oYHj5%2F6%2FcyEuHTtV6R2%2BJelqWJMWG0MiI7uakI7Tjw9hrxj0FH5%2BeoAVpj7HNTnbYfZPG6qkkBsXx8cnY%2FDzvVyxYZ1HIM7xovVNYPmHw%3D%3D&traceId=0bba60d115311209035991780"
//        ["coupon_end_time"] => string(10) "2018-07-11"
//        ["coupon_info"] => string(16) "满45元减40元"
//        ["coupon_remain_count"] => int(41000)
//        ["coupon_start_time"] => string(10) "2018-07-07"
//        ["coupon_total_count"] => int(50000)
//        ["item_description"] => string(0) ""
//        ["item_url"] => string(48) "http://detail.tmall.com/item.htm?id=571472944155"
//        ["nick"] => string(10) "tb_9317812"
//        ["num_iid"] => int(571472944155)
//        ["pict_url"] => string(85) "http://img.alicdn.com/tfscom/i2/668577352/TB2SyYVbEz.BuNjt_j7XXX0nFXa_!!668577352.jpg"
//        ["seller_id"] => int(668577352)
//        ["shop_title"] => string(24) "花花公子男士衣柜"
//        ["small_images"] => object(stdClass)#64 (1) {
//        ["string"] => array(4) {
//            [0] => string(85) "http://img.alicdn.com/tfscom/i4/668577352/TB2NnU9iiAnBKNjSZFvXXaTKXXa_!!668577352.jpg"
//            [1] => string(85) "http://img.alicdn.com/tfscom/i1/668577352/TB2A5YGijQnBKNjSZSgXXXHGXXa_!!668577352.jpg"
//            [2] => string(85) "http://img.alicdn.com/tfscom/i4/668577352/TB2ka8BpwKTBuNkSne1XXaJoXXa_!!668577352.jpg"
//            [3] => string(85) "http://img.alicdn.com/tfscom/i4/668577352/TB2VH5KxKySBuNjy1zdXXXPxFXa_!!668577352.jpg"
//          }
//        }
//  ["title"] => string(86) "花花公子夏短袖T恤男立领纯色短袖打底衫青年男装纯棉半袖POLO衫"
//  ["user_type"] => int(0)
//  ["volume"] => int(11606)
//  ["zk_final_price"] => string(5) "69.90"
//}





        return 'aa';
    }


    public function test1() {

        $conf = Tbkapi::get_bg_coupon();



        dump($conf);
        return 'b';
    }








}