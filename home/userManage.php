<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/host.css">
    <script src="../js/admin.js"></script>
    <link rel="stylesheet" href="../zui-1.9.1-dist/dist/css/zui.min.css">
    <link rel="stylesheet" href="../zui-1.9.1-dist/dist/lib/datagrid/zui.datagrid.css" rel="stylesheet">
    <script src="../zui-1.9.1-dist/dist/lib/jquery/jquery.js"></script>
    <script src="../zui-1.9.1-dist/dist/js/zui.min.js"></script>
    <script src="../zui-1.9.1-dist/dist/lib/datagrid/zui.datagrid.js"></script>
    <script type="text/javascript">
        $('#tableDataGrid').datagrid({
            states: {
                pager: {page: 1, recPerPage: 20}
            },
            // checkable: true,
            fixedLeftUntil:0,
            fixedTopUntil:0,
            checkByClickRow: true,
            sortable:true
        });
    </script>
</head>
<body>
<?php echo"
<table class='table table-borderedless datagrid-striped' data-ride='datagrid' id='tableDataGrid'>
    <thead>
    <tr>
        <th>时间</th>
        <th>英雄</th>
        <th>动作</th>
        <th>目标</th>
        <th>描述</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>00:11:12</td>
        <td>幻影刺客</td>
        <td>击杀</td>
        <td>斧王</td>
        <td>幻影刺客击杀了斧王。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    <tr>
        <td>00:13:12</td>
        <td>幻影刺客1</td>
        <td>击杀1</td>
        <td>斧王1</td>
        <td>幻影刺客击杀了斧王1。</td>
    </tr>
    </tbody>
</table>
"?>
</body>
</html>