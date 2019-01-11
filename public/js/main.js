window.onscroll = function(){scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementById("sidenav").style.display = "block";
}
else {
    document.getElementById("sidenav").style.display = "none";

}
}