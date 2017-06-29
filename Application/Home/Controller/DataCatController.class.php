<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class DataCatController extends Controller
{
	public function index(){
		$dataModel = M('Tol_lm');
		$where['fid'] = 0;
		$res = $dataModel->where($where)->order('px')->select();
		$this->assign('cat',$res); 
		$this->display();
	}

	public function add(){
		$dataModel = M('Tol_lm');
		if (!IS_POST) {
			$where['fid'] = 0;
			$res = $dataModel->where($where)->select();
			$this->assign('list',$res); 
			$this->display();
		}
		if (IS_POST) {
			if(!$dataModel->create()){
				$this->error($dataModel->getError());
				exit;
			}else{
				if ($dataModel->add()) {
					$this->success("添加成功",U('DataCat/index'));
				}else{
					$this->error("添加失败");
				}
			}
		}
	}

	public function update($id){
		$dataModel = M('Tol_lm');
		if (!IS_POST) {
			 $where1['fid'] = 0;
			 $where['id_lm'] = $id;
			 $result = $dataModel->where($where1)->select();
			 $res = $dataModel->where($where)->find();
			 $this->assign('list',$result);
			 $this->assign('to',$res);
			 $this->display();
		}
		if(IS_POST){
			if(!$dataModel->create()){
				$this->error($dataModel->getDbError());
				exit;
			}else{
				if($dataModel->save()){
					$this->success("修改成功",U('DataCat/index'));
				}else{
					$this->error("修改失败");
				}
			}
		}
		
	}

	public function delete($id){
		$dataModel = M('Tol_lm');
		$id = intval($id);
		if($dataModel->delete($id)){
			$this->success("删除成功",U('DataCat/index'));
		}else{
			$this->error("删除失败");
		}
	}
} 
?>

