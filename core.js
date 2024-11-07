

function eror() {
    alert("Password atau Username Salah");
}

function grade() {
    let input = document.getElementById("math").value;
    if (input == 100) {
        alert("Wow A+");
    } else if (input >= 101) {
        alert("Masukkan yang benar");
    } else if (input >= 95) {
        alert("Good A");
    } else if (input >= 75) {
        alert("OK B");
    } else if (input >= 50) {
        alert("Hmm C");
    } else if (input >= 1) {
        alert("bruh D");
    } else {
        alert("Masukkan yang benar");
    }
}




