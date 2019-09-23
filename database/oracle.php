<?php
function XMLDBWrite($db,$dbCon,$dbName,$dbPswd,$UserName,$UserPswd,$TableSpace,$path="",$fileName=""){
    if($path === "")
        $path = "../";
    if($fileName === "")
        $fileName="database.xml";
    $xml_data=
        "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <JoinCheer>
        <DATABASE>
            <name>".$db."</name>
            <connect>".$dbCon."</connect>
        </DATABASE>
        <DBA>
            <name>".$dbName."</name>
            <password>".$dbPswd."</password>
        </DBA>
        <USER>
            <name>".$UserName."</name>
            <password>".$UserPswd."</password>
            <tableSpace>".$TableSpace."</tableSpace>
        </USER>
    </JoinCheer>";
    $xml_file = fopen($path.$fileName,"w");
    fwrite($xml_file,$xml_data);
    fclose($xml_file);
    return $xml_data;
}
function CheckDBStatus(){
    $db="";
    $dbCon="";
    $dbName="";
    $dbPswd="";
    $userName="";
    $userPswd="";
    $tableSpace="";
    if(fopen("../database.xml",'r')){
        $xml_obj = simplexml_load_file('../database.xml');
        $xml_json=json_encode($xml_obj);
        $xml_arr=json_decode($xml_json,true);
        $db         =$xml_arr['DATABASE']['name'];
        $dbCon      =$xml_arr['DATABASE']['connect'];
        $dbName     =$xml_arr['DBA']['name'];
        $dbPswd     =$xml_arr['DBA']['password'];
        $userName   =$xml_arr['USER']['name'];
        $userPswd   =$xml_arr['USER']['password'];
        $tableSpace =$xml_arr['USER']['tableSpace'];
    }
    else{
//        数据库
        $db="oracle";
//        连接符
        $dbCon="127.0.0.1:1521/orcl";
//        数据库顶级用户
        $dbName="system";
//        数据库顶级用户密码
        $dbPswd="system";
//        数据库用户名
        $userName="ChengDu";
//        数据库用户密码
        $userPswd="oracle";
//        表空间
        $tableSpace="CDJQ";
        XMLDBWrite($db,$dbCon,$dbName,$dbPswd,$userName,$userPswd,$tableSpace);
    }
    // 查询数据库是否存在，不存在就创建数据库内容
    if(strtoupper($db)==="ORACLE")
    {
        $con = ocilogon($dbName,$dbPswd,$dbCon);
        if(!$con){
            $err = oci_error();
            print htmlentities($err['message']);
            exit;
        }
        else{
            $sql = "select count(*) from dba_tablespaces  where TABLESPACE_NAME = '".$tableSpace."';";
            $ora = oci_parse($con,$sql);//编译SQL语句
            oci_execute($ora,OCI_DEFAULT);//执行
//            while($row = oci_fetch_row($ora)){
//                $col=0;
//
//            }
            $row = oci_fetch_row($ora);
            if($row[0]==="0"){
                echo("<script>alert('暂不支持".$db."数据库')</script>");
            }
        }
    }
    else if(strtoupper($db)==="MYSQL")
    {

    }
    else{
        echo("<script>alert('暂不支持".$db."数据库')</script>");
    }

}
?>