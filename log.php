<?php
	$userName = $_POST["ID"];
	$userPswd = $_POST["PS"];
	//小蘑菇供应商库存管理系统
	$dbName = "XMGGYSKCGLXT";
	//如果错误就重定位到登录界面
	if($userName == "")
		{
			echo "<script>window.location.href='index.php'</script>";
		echo "alert(\"用户名为空\");"
}
	
?>