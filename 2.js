// Check Username
function usernameCheck(usernameInput) {
    var Regex = /^[a-z]{5,7}$/;
    return Regex.test(usernameInput);
}

// Check Password
function passwordCheck(passwordInput) {
    var Regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@])(?!.*[!#$%^&*()-+=]).{9,9}$/;
    return Regex.test(passwordInput);
}

// Test Username
console.log(usernameCheck("diandra"));
console.log(usernameCheck("Ebi"));

// Test password
console.log(passwordCheck("Kint4m@ni"));
console.log(passwordCheck("p@ssW0rd!"));