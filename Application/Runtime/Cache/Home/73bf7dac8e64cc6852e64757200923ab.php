<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/rc/Public/css/normalize.css" />
		<link rel="stylesheet" href="/rc/Public/css/general.css" />
		<link rel="stylesheet" href="/rc/Public/css/index.css" />
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
			<form class="form-horizontal" method="post" id="userform" action="<?php  echo U('User/updateInfo')?>">

			   	<div class="form-group">
			   	<label for="user_email" class="col-sm-2 control-label"> <span class="need">*</span>用户名：</label>
			      	<div class="col-sm-3">
			         	<input type="text" class="form-control" name="user_name"  value="<?php echo $userdata['user_name'];?>" id="user_name">
			      	</div>  	
			   	</div>

			   	<div class="form-group">
			      	<label for="user_pwd" class="col-sm-2 control-label"><span class="need">*</span>密码：</label>
			      	<div class="col-sm-3">
			         	<input type="text" class="form-control" name="user_pwd"  value="<?php echo $userdata['user_pwd'];?>" id="user_pwd">
			      	</div>
			   	</div>

			   

			    <div class="form-group">
			      	<div class="col-sm-offset-2 col-sm-10">
			         	<button type="submit" class="btn btn-info">确定</button>
			         	 <a href="<?php echo U('User/showInfo'); ?>"<button  class="btn btn-default">返回</button> </a>
			     	</div>     	
			   	</div>

			</form> 
		</div>		

		<script type="text/javascript" src="/rc/Public/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="/rc/Public/js/bootstrap-dropdown.js"></script>
	</body>
</html>