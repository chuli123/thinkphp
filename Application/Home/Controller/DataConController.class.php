<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 17:54
 */
namespace Home\Controller;
use Think\Controller;
class DataConController extends Controller{
    public function index(){
        $conModel = M('Tol_co');
        $res = $conModel->select();
        $this->assign('list',$res);
        $this->display();
    }

    public function add(){
        $this->display();
    }
}