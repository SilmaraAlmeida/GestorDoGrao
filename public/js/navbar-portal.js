const hamburguer = document.querySelector(".toggle-btn");
const toggler = document.querySelector("#icon");
hamburguer.addEventListener("click", function() {
    const sidebar = document.querySelector("#sidebar");

    // Alterna a classe 'expand' no sidebar
    sidebar.classList.toggle("expand");

    // Alterna os ícones entre 'bxs-chevrons-right' e 'bxs-chevrons-left'
    toggler.classList.toggle("bxs-chevrons-right");
    toggler.classList.toggle("bxs-chevrons-left");
});
