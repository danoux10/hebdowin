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
