<?php
/**
 * Created by PhpStorm.
 * User: cary
 * Date: 2018/6/28
 * Time: 下午4:11
 */

namespace app\pygetbk\controller;


use cmf\controller\AdminBaseController;

class AdminTbkapiController extends AdminBaseController
{

    /**
     * 数据管理
     * @adminMenu(
     *     'name'   => '数据管理',
     *     'parent' => 'pygetbk/AdminIndex/default',
     *     'display'=> true,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '数据管理',
     *     'param'  => ''
     * )
     */
    public function index() {


        return $this->fetch();
    }

    /**
     * 自动获取数据
     * @adminMenu(
     *     'name'   => '定时获取',
     *     'parent' => 'index',
     *     'display'=> 'true',
     *     'hasView'=> 'true',
     *     'order'  => '10000',
     *     'icon'   => '',
     *     'remark' => '定时获取',
     *     'param'  => ''
     * )
     */
    public function autodata() {

        return 'sss';
    }

}