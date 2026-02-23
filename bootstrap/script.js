document.addEventListener('DOMContentLoaded', function () {
    let btn = document.querySelector('#btn.btn-primary');

    btn.addEventListener('click', function () {
        btn.classList.toggle('right');
    });
});