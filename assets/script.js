/*/assets/scripts.js*/
function validatePassword() {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    
    if (password !== confirmPassword) {
        document.getElementById("error-message").innerHTML = "Password tidak cocok!";
        return false;
    }
    return true;
}
