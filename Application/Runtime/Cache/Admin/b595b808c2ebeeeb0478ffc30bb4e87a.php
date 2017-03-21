<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="/Public/css/page.css" rel="stylesheet" type="text/css">
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/jquery.form.min.js"></script>
    <script src="/Public/js/layer/layer.js"></script>
    <script src="/Public/js/ajaxsend.js"></script>
    <script src="/Public/js/ajaxpage.js"></script>
</head>
<body>

<p>欢迎：<?php echo (session('name')); ?></p>
<p><a href="<?php echo U('Index/logout');?>">退出</a></p>

<div>
    <div>
        <form id="form1" action="<?php echo U('Index/imageUpload');?>" method="post" enctype="multipart/form-data">
            图片上传：<input type="file" name="logo" />
            <input type="submit" value="上传" />
        </form>
    </div>

    <div id="ajaxfresh">
        <ul>
    <?php if(is_array($list)): foreach($list as $key=>$v): ?><li><?php echo ($v["truename"]); ?></li><?php endforeach; endif; ?>
</ul>

<div class="pagination">
    　　<?php echo ($page); ?>
</div>

    </div>


</div>

</body>
</html>