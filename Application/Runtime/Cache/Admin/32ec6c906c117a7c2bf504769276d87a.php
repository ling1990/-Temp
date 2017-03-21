<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/jquery.form.min.js"></script>
    <script src="/Public/js/layer/layer.js"></script>
    <script src="/Public/js/ajaxsend.js"></script>
    <script>
        var Logn_in = "<?php echo U('Index/index');?>";
    </script>
</head>
<body>

<form id="form1" method="post" action="/index.php/Admin/Login/index.html">
    <p>用户名：<input type="text" name="name" /></p>
    <p>密码：<input type="password" name="password" /></p>
    <p>验证码：<input type="text" name="verify" /><img src="<?php echo U('Admin/Login/verifyImg');?>" onclick="this.src='/index.php/Admin/Login/verifyImg/time'+Math.random()" /></p>
    <p><input type="submit" value="登陆" /></p>
</form>


</body>
</html>