<?php
//该文件是返回sql语句的！
//
funtion selectSql($dbObj,$dbTableName,$dbAdditon){
	if($dbObj=="")
		$dbObj = " * ";
	return "select ".$dbObj." from ".$dbTableName.$dbAdditon;
}
funtion insertSql(){

}
funtion createDBSql($dbName){
	return "create database ".$dbTableName;
}

funtion deleteDBSql($dbName){
	return "drop database ".$dbName;
}

funtion insertSql(){

}

funtion insert(){

}

funtion insert(){

}

funtion insert(){

}

funtion insert(){

}


	
?>