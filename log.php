<?php
	$userName = $_POST["ID"];
	$userPswd = $_POST["PS"];
	//数据库所在地址
	$dbDrct = "localhost";
	//数据库用户名
	$dbManr = "root";
	//数据库密码
	$dbPswd = "";
	//小蘑菇供应商库存管理系统
	$dbName = "XMGGYSKCGLXT";
	//如果错误就重定位到登录界面
	if($userName == "")
		setcookie("log","userNameIsEmpty",time()+10);
		echo "<script>window.location.href='index.php'</script>";
	else if($userPswd == "")
		setcookie("log","userPswdIsEmpty",time()+10);
		echo "<script>window.location.href='index.php'</script>";
	else{
		$dbConect = mysqli_connect($dbDrct,$dbManr,$dbPswd,$dbName);
		if(mysqli_connect_errno($dbConect)){
			echo "连接数据库失败，代码：".mysqli_connect_errno();
		}
		else{
			$sql = "select "
		}

	}

	
?>