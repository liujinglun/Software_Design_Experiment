<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" href="/rc/Public/css/normalize.css">
	<link rel="stylesheet" href="/rc/Public/css/general.css">
	<link rel="stylesheet" href="/rc/Public/css/comment.css">
  <link rel="stylesheet" type="text/css" href="/rc/Public/css/bootstrap.min.css"/>

  <link rel="stylesheet" type="text/css" href="/rc/Public/css/tmp.css"/>
    <link rel="stylesheet" type="text/css" href="/rc/Public/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/rc/Public/css/DT_bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/rc/Public/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/rc/Public/css/style2.css"/>
</head>
<body>
<script type="text/javascript">
  var index_url = '<?php echo U("Home/index/Index")?>';
  var user_name_url = '<?php echo session("user_name") ?>';
  var comment_manage_url = '<?php  echo U("Comment/manageComment") ?>';
  var show_info_url = '<?php  echo U("User/showInfo") ?>';
  var follow_list_url = '<?php  echo U("User/followList") ?>';
  var logout_url = '<?php echo U("User/logout")?>';
  var login_url = '<?php echo U("User/login")?>';
  var search_url = '<?php echo U("Home/Search/SearchResult")?>';
</script>
	<script type="text/javascript" src = "/rc/Public/js/home_toolbar.js"></script>
<div class="wrap" id="main">
    <div class="container">
    <table class="bordered-table zebra-striped" id="example">
        <caption>用户信息</caption>
        <thead>
            <tr>
                <th>用户名</th>
              <th>邮箱</th>
              <th>学院</th>
              <th>学校</th>
              <th>操作</th>
          </tr>
       </thead>
       <tbody>
            <?php foreach ($data as $key => $value): ?>
            <tr>
                <td><?php echo $value['username']?></td>
                <td><?php echo $value['user_email']?></td>
                <td><?php echo $value['collegename']?></td>
                <td><?php echo $value['schoolname']?></td>
              
                <td>
                  <a href="/rc/index.php/Home/User/../Comment/followComment?user_id=<?php  echo $value['follow_id']; ?>" class="btn btn-info" role="button">查看其评论</a>
                  <a href="/rc/index.php/Home/User/../User/cancelFollow?user_id=<?php  echo $value['follow_id']; ?>" class="btn btn-warning" role="button">取消关注</a>
                </td>
              </tr>
          <?php endforeach;?>
        </tbody>
    </table>
    </div>
    </div>
    <script type="text/javascript" src="/rc/Public/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/rc/Public/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="/rc/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/rc/Public/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/rc/Public/js/demo.js"></script>
    </body>
    </html>