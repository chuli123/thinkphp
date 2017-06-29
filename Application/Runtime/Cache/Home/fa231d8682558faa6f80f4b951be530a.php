<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.css" />
<link rel="stylesheet" type="text/css"
	href="/Public/Css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/Public/Css/style.css" />
<script type="text/javascript" src="/Public/Js/jquery2.js"></script>
<script type="text/javascript" src="/Public/Js/jquery2.sorted.js"></script>
<script type="text/javascript" src="/Public/Js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/Js/ckform.js"></script>
<script type="text/javascript" src="/Public/Js/common.js"></script>

<style type="text/css">
body {font-size: 20px;
	padding-bottom: 40px;
	background-color: #e9e7ef;
}

.sidebar-nav {
	padding: 9px 0;
}

@media ( max-width : 980px) {
	/* Enable use of floated navbar text */
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px;
	}
}
</style>
</head>
<body>
	<div class="tnav">
	  导航管理：<a href="<?php echo U('DataCat/add');?>">添加分类</a>
	</div>
	<table class="table table-bordered table-hover definewidth m10">
		<thead>
			<tr>
				<th>排序</th>
				<th>ID</th>
				<th>分类名称</th>
				<th>管理菜单</th>
			</tr>
		</thead>
		<?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["px"]); ?></td>
				<td><?php echo ($vo["id_lm"]); ?></td>
				<td><?php echo ($vo["title_lm"]); ?></td>
				<td>
					<a href="<?php echo U('DataCat/update',array('id'=>$vo['id_lm']));?>" class="btn">修改</a>
					<a href="<?php echo U('DataCat/delete',array('id'=>$vo['id_lm']));?>" class="btn">删除</a>
				</td>
			</tr>
			<?php $_result=SidType($vo['id_lm']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($vo["px"]); ?></td>
					<td><?php echo ($vo["id_lm"]); ?></td>
					<td>┗━<?php echo ($vo["title_lm"]); ?></td>
					<td>
						<a href="<?php echo U('DataCat/update',array('id'=>$vo['id_lm']));?>" class="btn">修改</a>
						<a href="<?php echo U('DataCat/delete',array('id'=>$vo['id_lm']));?>" class="btn">删除</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
	</table>

</body>
</html>