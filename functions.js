function updateText() {
    var text_R = document.getElementById("text_R").value;
    var text_G = document.getElementById("text_G").value;
    var text_B = document.getElementById("text_B").value;
    var border_width = document.getElementById("border_width").value;

    var text = document.getElementById("text");
    text.style.color = `rgb(${text_R},${text_G},${text_B})`;
    text.style.borderWidth = border_width
}

function validatePasswords() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;

    if (pass1 != pass2) {
        alert("Passwords do not match")
    } else {
        alert("Passwords match!")
    }
}