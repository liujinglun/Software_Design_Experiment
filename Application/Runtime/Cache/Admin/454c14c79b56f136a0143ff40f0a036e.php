<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" href="/rc/Public/css/normalize.css">
	<link rel="stylesheet" href="/rc/Public/css/general.css">
	<link rel="stylesheet" href="/rc/Public/css/comment.css">
  <link rel="stylesheet" type="text/css" href="/rc/Public/css/bootstrap.min.css"/>

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

    <?php foreach ($data as $num => $record): ?>
          <div id="comment">
            <div class="comment_item" >
                <div class="content">
                    <h3>
                      <span class="info1">
                          <span class="comment_username"><?php echo $record["username"] ?></span>
                          <span class="time"><?php echo $record["comment_time"] ?></span>
                        </span>
                        <span class="info2">
                            <span class="comment_school"><?php echo $record["school"] ?></span>
                            <span class="comment_college"><?php echo $record["college"] ?></span>
                            <span class="comment_teacher"><?php echo $record["teacher"] ?></span>
                            <span class="comment_course"><?php echo $record["course"] ?></span>
                            <span class="comment_course"><a href="<?php echo U('Admin/deleteComment').'?comment_id='.$record['comment_id']; ?>"<button  class="btn btn-default">删除评论</button> </a></span>
                            <span class="comment_course"><a href="<?php echo U('Admin/deleteUser2').'?user_id='.$record['user_id']; ?>"<button  class="btn btn-default">删除用户</button> </a></span>
                          </span>
                            
                    </h3>
                    <p class=""><?php echo $record["comment_content"] ?>
                    </p>
                </div>
            </div>
          </div>
        <?php endforeach; ?>

      <div id="pagenav">
          </div>
      <!--
      <?php foreach ($comment as $num => $record): ?>
      <ul>
        <li>a<?php echo $record["comment_content"] ?></li>
        <li>b<?php echo $record["teacher_id"] ?></li>
      </ul>
      <?php endforeach; ?>
      -->
      
  	</div>
</body>
<!--
<script type="text/javascript">
  var baseurl = "<?php echo U('/Home/Teacher/addTeacher'); ?>" + "?school_id=";
</script>
-->
<script type="text/javascript" src="/rc/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/rc/Public/js/general.js"></script>
<script type="text/javascript" src="/rc/Public/js/index.js"></script>
<script type="text/javascript" src="/rc/Public/js/bootstrap-dropdown.js"></script>
</html>