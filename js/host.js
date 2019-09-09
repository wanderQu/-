function ChangeFrame(dev){
    let src = "";
    if(dev === "log")
        src = "../home/log.html";
    else if(dev === "home")
        src = "../home/home.html";
    else if(dev === "admin")
        src = "../home/admin.html";
    document.getElementById("frame").src = src;
}