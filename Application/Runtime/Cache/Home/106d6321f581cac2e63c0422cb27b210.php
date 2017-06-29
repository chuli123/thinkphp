<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>基本配置</title>
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
		font-size: 20px;
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
<body >
  <div class="m10">
    <form class="form-horizontal" action="<?php echo U('index/updata');?>" method="post">
      <div class="control-group">
        <label class="control-label">网站标题：</label>
        <div class="controls">
          <textarea rows="3" name="ym_tit" style="width: 600px;"><?php echo ($gl["ym_tit"]); ?></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">关键字：</label>
        <div class="controls">
          <textarea rows="3" name="ym_key" style="width: 600px;"><?php echo ($gl["ym_key"]); ?></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">网站描述：</label>
        <div class="controls">
          <textarea rows="3" name="ym_des" style="width: 600px;"><?php echo ($gl["ym_des"]); ?></textarea>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="hidden" name="id" value="<?php echo ($gl["id"]); ?>">
          <button type="submit" class="btn">保存</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>