<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" href="/rc/Public/css/normalize.css">
	<link rel="stylesheet" href="/rc/Public/css/general.css">
	<link rel="stylesheet" href="/rc/Public/css/comment.css">
  <link href="/rc/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/rc/Public/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/rc/Public/css/DT_bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/rc/Public/css/style2.css"/>
</head>
<body>
<script type="text/javascript">
  var user_name = '<?php echo $_SESSION['user_name']; ?>';
  var user_manage_url = "<?php  echo U('Admin/manageUser') ?> ";
  var comment_manage_url = "<?php  echo U('Admin/manageComment') ?> ";
  var all_comments_url = "<?php  echo U('Admin/allComments') ?> ";
  var show_info_url = "<?php  echo U('Admin/showInfo') ?> ";
  var logout_url = "<?php  echo U('Home/User/logout') ?> ";
</script>
<script type="text/javascript" src = "/rc/Public/js/admin_toolbar.js"></script>
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
            <?php foreach ($userdata as $key => $value): ?>
            <tr>
                <td><?php echo $value['user_name']?></td>
                <td><?php echo $value['user_email']?></td>
                <td><?php echo $value['collegename']?></td>
                <td><?php echo $value['schoolname']?></td>
              
                <td>
                  <a href="/rc/index.php/Admin/Admin/../Admin/deleteUser1?user_id=<?php  echo $value['user_id']; ?>" class="btn btn-warning" role="button">删除用户</a>
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