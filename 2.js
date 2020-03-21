// Check Username
function usernameCheck() {
    var username = document.getElementById("usernameInput").value;
    var Regex = /^[a-z]{5,7}$/;
    return Regex.test(username);
}

// Check Password
function passwordCheck() {
    var password = document.getElementById("passwordInput").value;
    var Regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@]).{9,9}$/;
    return Regex.test(password);
}