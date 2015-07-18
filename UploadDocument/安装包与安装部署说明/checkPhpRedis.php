<?php  
	$redis = new Redis();  
	$redis->connect("localhost","6379");
	$redis->set("say","Hello World");  
	echo $redis->get("say");
?>