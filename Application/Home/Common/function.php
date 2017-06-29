<?php
	function SidType($fid){
		$catModel = M('tol_lm');
		$where['fid'] = $fid;
		$list = $catModel -> where($where)->order('px')->select();
		return $list;
	}
?>