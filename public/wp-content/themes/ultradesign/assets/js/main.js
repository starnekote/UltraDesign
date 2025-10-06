document.addEventListener("DOMContentLoaded", function () {
    const burger = document.getElementById("burger");
    const cross = document.getElementById("cross");
    const list = document.getElementById("list");
    const buttons = document.querySelectorAll('.menu_btn');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        console.log('k');
        list.classList.toggle("show");
        cross.classList.toggle("show");
        burger.classList.toggle("hide");
        });
      });
    });