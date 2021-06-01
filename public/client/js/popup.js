
const popUp = document.querySelector('.popup_bg_form');
const rgBtn = document.getElementById('rg_btn_form');


rgBtn.addEventListener('click', () => {
    popUp.style.display = 'flex'
})

popUp.addEventListener('click', () => {
    popUp.style.display = 'none'
})