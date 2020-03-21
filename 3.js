// Triangle Function
function triangle(loop) {
    // Check Parameter
    if (Number.isInteger(loop) && loop > 0) {
        var triangle = "";
        for (var i = 0; i < loop; i++) {
            triangle += Star(i) + "\n";
        }
        return triangle;
    } else {
        return "Paramemeter harus angka dan positif!";
    }
}

// Star Function
function Star(loop) {
    var stars = "";
    for (var i = 0; i <= loop; i++) {
        stars += " #"
    }
    return stars;
}

// Test Function
console.log(triangle(5));