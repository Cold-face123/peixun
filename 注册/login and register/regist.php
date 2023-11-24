<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>注册界面</title>
    <link rel = "stylesheet" href="css/layui.css">
    <script src="layui.js"></script>
</head>
<body>
    <div class="layui-container">
        <div style="height: 150px"></div>
        <div class="layui-row">
            <div class="layui-col-md4" style="height: 150px"></div>
            <div class="layui-col-md4" style="height: 150px">
                <p style="text-align: center;font-size: 35px"> 注册界面</p>
                <div style="height: 15px;"></div>
                <form class="layui-form" action="regist_check.php" method="post">
                    <input type="number" name="username" placeholder="请输入用户名(电话号码)" class="layui-input">
                    <div style="height: 15px;"></div>
                    <input type="password" name="password1" placeholder="请输入密码" class="layui-input">
                    <div style="height: 15px;"></div>
                    <input type="password" name="password2" placeholder="请再次输入密码" class="layui-input">
                    <div style="height: 15px;"></div>
                    <input type="submit" value="注册" class="layui-btn-normal layui-btn-fluid">
                </form>
            </div>
            <div class="layui-col-md4" style="height: 150px"></div>
        </div>

    </div>
    <script>
        layui.use('form' , function (){
            var form = layui.form;
        });
    </script>

</body>
</html>