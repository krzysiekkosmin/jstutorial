// dropdown menu
const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}


function funcHome(){
    document.getElementById('welcome').style.display = 'flex';
    document.getElementById('about').style.display = 'none';
}

function funcAbout(){
    document.getElementById('about').style.display = 'flex';
    document.getElementById('welcome').style.display = 'none';

}