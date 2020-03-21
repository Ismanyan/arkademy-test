// groupNumber function
function groupNumber(phoneNumberString) {
    var cleaned = ('' + phoneNumberString).replace(/\D/g, '')
    var match1 = cleaned.match(/^(\d{3})(\d{3})(\d{3})(\d{3})(\d{3})$/);
    var match2 = cleaned.match(/^(\d{3})(\d{3})(\d{3})(\d{3})(\d{2})(\d{2})$/);
    if (match1) {
        return match1[1] + '-' + match1[2] + '-' + match1[3] + '-' + match1[4] + '-' + match1[5]
    } else if (match2) {
        return match2[1] + '-' + match2[2] + '-' + match2[3] + '-' + match2[4] + '-' + match2[5] + '-' + match2[6]
    }
}

// TEST
console.log(groupNumber('‘’993141 -1 1323 14-232'));