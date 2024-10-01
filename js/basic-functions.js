// // mise en évidence de la section active
// document.querySelectorAll('.navbar .menu li').forEach(link => {
// link.addEventListener('click', function() {
//     document.querySelector('.active-section')?.classList.remove('active-section');
//     this.classList.add('active-section');
// });
// });

// développer/réduire la navbar
let dynamicBtn = document.querySelector(".dynamic-sidebar");
let navbar = document.querySelector(".navbar");
dynamicBtn.onclick = function() {
    navbar.classList.toggle("active");
}