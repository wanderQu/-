function CheckPassword(){
    let name = document.getElementById("ID").value;
    let password = document.getElementById("PS").value;
    if(name === ""){
        alert("请输入账号");
    }
    else if(password === "") {
        alert("请输入密码");
    }
    else {
        //系统初始化
        if(name === "admin" && password === "admin"){
            ChangeFrame("admin");
        }
        //直接读取数据库信息
    }
}

// window.onresize = window.onload = function()
// {
//     var w,h
//     if(!!(window.attachEvent && !window.opera))
//     {
//         h = document.documentElement.clientHeight;
//         w = document.documentElement.clientWidth;
//     }
//     else
//     {
//         h = window.innerHeight;
//         w = window.innerWidth;
//     }
//     // document.getElementById ('msg').value  ='窗口大小：' + 'width:' + w + '; height:'+h;
//     var bgImg = document.getElementById('BckPic').getElementsByTagName('img')[0];
//     bgImg.width = (w - 5);
//     bgImg.height= (h-5) ;
// }   