<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/host.css">
    <script src="../js/host.js"></script>
    <link rel ="stylesheet" type = "text/css" href = "../zui-1.9.1-dist/dist/css/zui.min.css">
    <script src="../zui-1.9.1-dist/dist/lib/jquery/jquery.js"></script>
    <script src="../zui-1.9.1-dist/dist/js/zui.min.js"></script>
    <link href="../zui-1.9.1-dist/dist/lib/datagrid/zui.datagrid.min.css" rel="stylesheet">
    <script src="../zui-1.9.1-dist/dist/lib/datagrid/zui.datagrid.min.js"></script>

</head>
    <body style="background-color: white !important;">
    <!--新增-->
    <button class="btn" type="button"><i class="icon icon-plus float-left"></i>新增</button>
    <!--修改-->
    <button class="btn" type="button"><i class="icon icon-edit float-left"></i>修改</button>
    <!--删除-->
    <button class="btn" type="button"><i class="icon icon-times float-left"></i>删除</button>
    <!--刷新-->
    <button class="btn" type="button"><i class="icon icon-repeat float-left"></i>刷新</button>
    <p></p>
    <div id="grid" class="datagrid datagrid-striped" data-ride="datagrid" ></div>
<?php
include '../database/oracle.php';
error_reporting(0);//不显示所有提示
error_reporting(7);//只显示严重错误提示
//下列常见错误
//————————————————
//1、    E_ERROR 致命的运行时错误
//2、    E_WARNING 运行时警告(非致命性错误)
//4、    E_PARSE 编译时解析错误
//8、    E_NOTICE 运行时提醒(经常是bug，也可能是有意的)
//16、   E_CORE_ERROR PHP启动时初始化过程中的致命错误
//32、   E_CORE_WARNING PHP启动时初始化过程中的警告(非致命性错)
//64、   E_COMPILE_ERROR 编译时致命性错
//128、  E_COMPILE_WARNING 编译时警告(非致命性错)
//256、  E_USER_ERROR 用户自定义的致命错误
//512、  E_USER_WARNING 用户自定义的警告(非致命性错误)
//1024、 E_USER_NOTICE 用户自定义的提醒(经常是bug，也可能是有意的)
//2048、 E_STRICT 编码标准化警告(建议如何修改以向前兼容)
//4096、 E_RECOVERABLE_ERROR 接近致命的运行时错误，若未被捕获则视同E_ERROR
//6143、 E_ALL 除E_STRICT外的所有错误(PHP6中为8191,即包含所有)
//————————————————

CheckDBStatus();
echo"
<script>
    $('#grid').datagrid({
        dataSource: {
            cols: [
                {name: 'time', label: '姓名', width: 0.25},
                {name: 'hero', label: '账号', width: 0.25},
                {name: 'action', label: '联系方式', width: 0.25},
                {name:'use',label:'启用',width:0.1,html:true},
                {name:'acc',label:'服务器访问权限',width:0.1,html:true}
            ],
            array:[
                {time: '00:11:12', hero:'幻影刺客', action: '击杀', target: '斧王', desc: '幻影刺客击杀了斧王。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                acc:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'},
                {time: '00:13:22', hero:'幻影刺客', action: '购买了', target: '隐刀', desc: '幻影刺客购买了隐刀。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                acc:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'},
                {time: '00:19:36', hero:'斧王', action: '购买了', target: '黑皇杖', desc: '斧王购买了黑皇杖。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                acc:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'},
                {time: '00:21:43', hero:'力丸', action: '购买了', target: '隐刀', desc: '力丸购买了隐刀。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                acc:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'}
            ]
        },
        configs:{
            R0:{
                className:'text-center'
            },
            C4:{
                className:'text-center'
            },
            C5:{
                className:'text-center'
            }
        },
        height:700
    });
</script>
"?>
</body>
</html>