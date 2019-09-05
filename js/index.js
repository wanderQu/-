function CheckPassword(){
    let name = document.getElementById("ID").value;
    let pswd = document.getElementById("PS").value;
    if(name ===""){
        alert("请输入账号");
        return false;
    }
    else if(pswd === "") {
        alert("请输入密码");
        return false;
    }
    else {
        //系统初始化
        if(name == "admin" && pswd == "admin"){

        }
        //直接读取数据库信息
        let dbName = "";
        let dbPswd = "";
    }
}
function ReadDB(dbName,dbPswd,dbSQL){

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