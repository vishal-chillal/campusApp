function register() {
    $(".register").css("visibility", "visible");
    $(".logIn").css("visibility", "hidden");
}
function login() {
    $(".register").css("visibility", "hidden");
    $(".logIn").css("visibility", "visible");
}
function selectUsrName() {
    $(".selectUsername").css("visibility", "visible");
    $(".register").css("visibility", "hidden");
}

function newDoc() {
    window.location.assign("http://www.w3schools.com")
}
