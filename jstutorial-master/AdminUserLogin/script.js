function showForm(formId){
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    // document.querySelectorAll(".users-table").forEach(form => form.classList.remove("active"));

    document.getElementById(formId).classList.add("active");
}


//Selection of HTML object

const burger = document.querySelector('.burger i');
const nav = document.querySelector('.nav');

function toggleNav() {
    burger.classList.toggle('fa-bars');
    burger.classList.toggle('fa-times');
    nav.classList.toggle('nav-active');
}

burger.addEventListener('click', function() {
    toggleNav();
})