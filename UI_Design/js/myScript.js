function register() {
    $(".register").css("visibility", "visible");
    $(".logIn").css("visibility", "hidden");
}
function login() {
    $(".register").css("visibility", "hidden");
    $(".signIn").css("visibility", "visible");
    $(".selectUsername").css("visibility", "hidden");
}
function selectUsrName() {
    $(".selectUsername").css("visibility", "visible");
    $(".register").css("visibility", "hidden");
}
function newDoc() {
    window.location.assign("http://www.w3schools.com")
}
function newDoc1() {
    window.location.assign("logIn.html")
}
