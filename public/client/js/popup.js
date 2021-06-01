
const popUp = document.querySelector('.popup_bg_form');
const rgBtn = document.getElementById('rg_btn_form');


if (rgBtn) {
    rgBtn.addEventListener('click', () => {
        popUp.style.display = 'flex'
    })
}

if (popUp) {
    popUp.addEventListener('click', () => {
        popUp.style.display = 'none'
    })
}