<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Mr.Pan</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="/rc/Public/css/bootstrap3.3.min.css" />
    <link rel="stylesheet" href="/rc/Public/css/normalize.css"/>
    <link rel="stylesheet" href="/rc/Public/css/sign.css"/>

  </head>
  <body>
    <div class="wrapper">
      <div class="center-wrapper">
        <div class="form-wrapper">
          <div class="logo">
           教师评价系统
          </div>

          <div class="sign">
            <div id="signin">
             <button class="btn btn-default" id="newuser">新用户>></button>
              <form class="form-horizontal" action=<?php echo U("Home/User/login"); ?> method="post">
                <div class="form-group">
          
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="user_email" placeholder="邮箱">
                  </div>
                </div>
                <div class="form-group">
                
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="user_pwd" placeholder="密码">
                  </div>
                </div>
               
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">登录</button>
                    
                  </div>
                </div>
              </form>

            </div>

            <div id="signup">
            <button class="btn btn-default" id="login1"><<返回登录</button>
              <form class="form-horizontal" action=<?php  echo U("Home/User/register"); ?> method="post">
                <div class="form-group">
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="user_name" placeholder="用户名">
                  </div>
                </div>
                <div class="form-group">
                  
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="user_email" placeholder="邮箱">
                  </div>
                </div>
                <div class="form-group">
                 
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="user_pwd"  placeholder="密码">
                  </div>
                </div>
                 <div class="form-group">
                 
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="user_repwd"  placeholder="确认密码">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">注册</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/rc/Public/js/JSON.js"></script>
    <script type="text/javascript" src="/rc/Public/js/general.js"></script>
    <script type="text/javascript" src="/rc/Public/js/sign.js"></script>
  </body>
</html>