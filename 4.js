// Function Longest String
function longest(str) {

    // Sanitizer string
    var pattern = /[!@#$%^&*()-+=]+/g;
    var sanitizer = str.replace(pattern, "");

    var words = sanitizer.split(' ');
    return words.reduce(longer);
}

// TEST
console.log(longest("Halo Arkademian!"));
console.log(longest("Seluruh Arkademian mengucapkan selamat Ramadhan!"));
console.log(longest("Baju ini sangat bagus sekali!"));