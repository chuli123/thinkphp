<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function setgl(){
    	$gl = M('gl_setup');
    	$result = $gl->where('id=1')->find();
    	$this->assign('gl',$result);
    	$this->display();
    }

    public function updata(){
    	$gl = D('Gl_setup');
    	//默认显示添加表单
    	//create(数据参数,$type参数) 创建数据对象
        if (!$gl->create()) {
                $this->error($gl->getError());
            }else{
            	if (IS_POST){
		    		if($gl->save()){
		    			$this->success("修改成功",U('Index/setgl'));
		    		}else{
		    			$this->error($gl->getError());
		    		}
		    	}
            }
    	
    }
}