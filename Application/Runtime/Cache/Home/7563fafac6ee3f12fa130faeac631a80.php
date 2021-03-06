<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<link rel="stylesheet" href="/rc/Public/css/normalize.css">
	<link rel="stylesheet" href="/rc/Public/css/general.css">
	<link rel="stylesheet" href="/rc/Public/css/comment.css">
  <link rel="stylesheet" type="text/css" href="/rc/Public/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/rc/Public/css/style2.css"/>
  <link rel="stylesheet" type="text/css" href="/rc/Public/css/tmp.css"/>
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

    <?php foreach ($comment as $num => $record): ?>
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
                            <span class="comment_course"><a href="<?php echo U('Comment/deleteComment').'?comment_id='.$record['comment_id']; ?>"<button  class="btn btn-default">删除</button> </a></span>
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
     
     
  	</div>
</body>

<script type="text/javascript" src="/rc/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/rc/Public/js/general.js"></script>
<script type="text/javascript" src="/rc/Public/js/index.js"></script>
<script type="text/javascript" src="/rc/Public/js/bootstrap-dropdown.js"></script>
</html>