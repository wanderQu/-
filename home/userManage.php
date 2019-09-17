<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/host.css">
    <link rel ="stylesheet" type = "text/css" href = "../zui-1.9.1-dist/dist/css/zui.min.css">
    <script src="../zui-1.9.1-dist/dist/lib/jquery/jquery.js"></script>
    <script src="../zui-1.9.1-dist/dist/js/zui.min.js"></script>
    <link href="../zui-1.9.1-dist/dist/lib/datagrid/zui.datagrid.min.css" rel="stylesheet">
    <script src="../zui-1.9.1-dist/dist/lib/datagrid/zui.datagrid.min.js"></script>

</head>
<body>
<div id="grid" class="datagrid datagrid-striped" data-ride="datagrid" >
</div>
<?php echo"
<script>
    $('#grid').datagrid({
        dataSource: {
            cols: [
                {name: 'time', label: '姓名', width: 0.25},
                {name: 'hero', label: '账号', width: 0.25},
                {name: 'action', label: '联系方式', width: 0.25},
                {name:'use',label:'启用',width:0.1,html:true},
                {name:'del',label:'删除',width:0.1,html:true}
            ],
            array:[
                {time: '00:11:12', hero:'幻影刺客', action: '击杀', target: '斧王', desc: '幻影刺客击杀了斧王。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                del:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'},
                {time: '00:13:22', hero:'幻影刺客', action: '购买了', target: '隐刀', desc: '幻影刺客购买了隐刀。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                del:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'},
                {time: '00:19:36', hero:'斧王', action: '购买了', target: '黑皇杖', desc: '斧王购买了黑皇杖。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                del:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'},
                {time: '00:21:43', hero:'力丸', action: '购买了', target: '隐刀', desc: '力丸购买了隐刀。',
                use:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>',
                del:'<div class=\'switch\' style=\'height:20px;\'><input type=\'checkbox\'><label class=\'del\'></label></div>'},
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