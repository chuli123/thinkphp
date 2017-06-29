<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>资料内容管理</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/style.css" />
    <script type="text/javascript" src="/Public/Js/jquery2.js"></script>
    <script type="text/javascript" src="/Public/Js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="/Public/Js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Js/ckform.js"></script>
    <script type="text/javascript" src="/Public/Js/common.js"></script>

    <style type="text/css">
        body {font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
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
    导航管理：<a href="<?php echo U('DataCon/add');?>">添加资料</a>
</div>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <!--<th>选中</th>-->
        <th>排序</th>
        <th>ID</th>
        <th>标题</th>
        <th>点击量</th>
        <th>管理操作</th>

    </tr>
    </thead>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <!--<td><a href=""><input type="checkbox" name="id"></a></td>-->
            <td><?php echo ($vo["px"]); ?></td>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["title"]); ?></td>
            <td><?php echo ($vo["read_num"]); ?></td>
            <td><a href="">修改</a>  | <a href="">删除</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

</body>
</html>