// window.onload = function () {
//     ClickDiv();
// }

function ChangeChildFrame(dev){
    let src = "";
    if(dev === "home")
        src = "../home/home.html";
    else if(dev === "normal")
        src = "../home/normal.html";
    else if(dev==="faqJQ")
        src = "../home/faqJQ.html";
    else if(dev === "userManage")
        src = "../home/userManage.php";
    document.getElementById("childFrame").src = src;
}
function f() {
    alert("a");
}
// function ClickDiv() {
//     let home = document.getElementById("home");
//     let normal = document.getElementById("normal");
//     let faqJQ = document.getElementById("faqJQ");
//     let system = document.getElementById("system");
//     home.onclick = function () {
//         ChangeChildFrame("home");
//     }
//     normal.onclick = function () {
//         ChangeChildFrame("normal");
//     }
//     faqJQ.onclick =function(){
//         ChangeChildFrame("faqJQ");
//     }
//     system.onclick = function () {
//         ChangeChildFrame("system");
//     }
// }