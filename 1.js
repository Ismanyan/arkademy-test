// Profile Function
function profile(name, age) {
    var json = {
        name        : name,
        age         : age,
        address     : "Kp Pondok Arum, Kota Tangerang, Banten",
        hobbies     : "Music",
        is_married  : false,
        list_school : {
            name    : "Smkn 4 Kota Tangerang",
            year_in : 2017,
            year_out: 2020,
            major   : null
        },
        skills      : {
            php     : "advanced",
            laravel : "advanced",
            codeigniter : "advanced",
            bootstrap   : "advanced",
            jquery  : "advanced",
            react   : "beginner",
            flutter: "beginner"
        },
        interest_in_coding  : true

    };

    return JSON.stringify(json, null, 2);
}

var json = profile('bilkis',17);
console.log(json);