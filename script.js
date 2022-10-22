const login =  document.getElementById('login');
const btnLogin = document.getElementById('login-btn');
const btnCloseLogin = document.getElementById('login-close');
login.classList.add('close');

function openLogin(){
  if(login.classList.contains('close')){
    login.classList.remove('close');
  }
}
function closeLogin(){
  if(!login.classList.contains('close')){
    login.classList.add('close');
  }
}

btnLogin.addEventListener('click',openLogin);
btnCloseLogin.addEventListener('click',closeLogin);

const register = document.getElementById('register');
const btnRegister = document.getElementById('register-btn');
const btnCloseRegister = document.getElementById('register-close');
register.classList.add('close');

function openRegister(){
  if(register.classList.contains('close')){
    register.classList.remove('close');
  }
}
function closeRegister(){
  if(!register.classList.contains('close')){
    register.classList.add('close');
  }
}

btnRegister.addEventListener('click',openRegister);
btnCloseRegister.addEventListener('click',closeRegister);

const resetPopup = document.getElementById('confirm-popup');
const cancelReset = document.getElementById('cancel-reset');
const btnReset = document.getElementById('reset-btn');
resetPopup.classList.add('close');

function openPopup() {
  if (resetPopup.classList.contains('close')){
    resetPopup.classList.remove('close');
  }
}
function closePopup(){
  if (!resetPopup.classList.contains('close')){
    resetPopup.classList.add('close');
  }
}

btnReset.addEventListener('click',openPopup);
cancelReset.addEventListener('click',closePopup);
