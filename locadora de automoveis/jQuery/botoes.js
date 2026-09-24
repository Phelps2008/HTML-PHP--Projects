const hamburguer = document.querySelector(".hamburguer");
const menu = document.querySelector(".menu");
const icon = document.querySelector("i");


function toggleMenuIcon(isActive) {
    if (isActive) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-xmark");
        hamburguer.setAttribute("aria-expanded", "true");
        hamburguer.setAttribute("aria-label", "Fechar menu");
    } else {
        icon.classList.remove("fa-xmark");
        icon.classList.add("fa-bars");
        hamburguer.setAttribute("aria-expanded", "false");
        hamburguer.setAttribute("aria-label", "Abrir menu");
    }
}


function closeMenu() {
    menu.classList.remove("active");
    toggleMenuIcon(false);
}


if (hamburguer && menu) {
    console.log("teste");
    
    hamburguer.addEventListener("click", () => {
        const isActive = menu.classList.contains("active");
        
        if (isActive) {
            closeMenu();
        } else {
            menu.classList.add("active");
            toggleMenuIcon(true);
        }
    });

    
    document.querySelectorAll(".menu a").forEach(link => {
        link.addEventListener("click", () => {
            closeMenu();
        });
    });

}