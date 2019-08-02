<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>小蘑菇登录</title>
    <style type="text/css">
       /* body:after{
            content:'';
            display: block;
            visibility:hidden;
            clear:both;
                }
        #le{
            float:left;
            width:100px;
            height:100px;
            background:#ccc;
            margin-right:10px;
            animation:tr 2s infinite alternate;
        }
        #ri{
            float: right;
            width:100px;
            height:100px;
            background:#6e6e6e;
            margin-left:10px;
            animation:tr 2s infinite alternate;
        }
        #center{
            height:100px;
            overflow:hidden;
            word-break:break-all;
            white-space: pre-wrap;
            background-color:#343434;
        }
        @keyframes tr{
            0%{
                width:100px;
            }
            100%{
                width:300px;
            }
        }*/
    body{
        width: 100%;
        height: 100%;
        background-color: rgb(200,200,200);
    }
    .loging{
        background-color: rgba(255,255,255,0.8);
        margin:0 auto;
        margin-top: 200px;
        margin-bottom: 100px;
        width: 500px;
        height: 600px;
    }
    .logingBox{
        padding: 30px;
    }
    .title{
        text-align: center;
        font-size: 3rem;
        padding-bottom: 20px;
        border-bottom: 2px solid black;
        }
    .FORM{
        padding:30px;
    }
    #ID,#PS,#BT{
        width: 100%;
        height: 60px;
        line-height: 40px;
        font-size: 30px;
        text-align: center;
        margin-top: 20px;
        font-size: 1.8rem;
        border:none;
        /*background-color: rgba(255,255,255,0.8);*/
        /*border-radius: 30px;*/
    }
    #BT{
        background-color: #1f4f82;
        height: 70px !important;
        font-size: 2.2rem;
        font-weight: bold;
        color:white;
    }
    #BT:hover {background-color: #017cba}
    </style>
    <script type="text/javascript">
        function CheckPassword(){
            var name = document.getElementById("ID").value;
            var pswd = document.getElementById("PS").value;
            if(name =="")
                alert("请输入账号");
                return false;
            else if(pswd == "")
                alert("请输入密码");
                return false;

            else {
                window.open('https://www.baidu.com');
                window.close();
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="loging">
        <div class="logingBox">
            <div class="title">小蘑菇</div>
            <form class="FORM" action="log.php" method="POST" onsubmit ="return CheckPassword()">
                <input type="text" id="ID" name="ID" placeholder="账号" title="请输入账号" oninput = "value=value.replace(/[^\d]/g,'')" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                <p></p>
                <input type="password" id="PS" name="PS" placeholder="密码" title="请输入密码" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                <p></p>
                <button  type="submit" id="BT" title="请点击此按钮登录" >登录</button>
                <p></p>
                <b title="忘记密码请联系管理员">忘记密码？</b>
            </form>
        </div>
    </div>
</body>
</html>
