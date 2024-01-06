const signUpModal = document.getElementById("signup-container-modal");
const password = document.getElementById("signup-password").value;

function sBtnClose() {
    if (signUpModal.style.display == 'flex') {
        signUpModal.style.display = 'none';
    } else {
        signUpModal.style.display = 'none';
    }
}

function signup() {
    signUpModal.style.display = 'flex';
}

function checkLength(){
    if(password.length < 8){
        alert("Password must be longer than 8 characters.");
    }
}


