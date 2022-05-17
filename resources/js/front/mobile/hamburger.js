export let renderHamburger = () => {
    let menu = document.getElementById("menu");
    let hamburger = document.getElementById("hamburger");

    if(hamburger) {

        hamburger.addEventListener("click", () => {
            
            menu.classList.toggle("active");
            hamburger.classList.toggle("active");
        });
    }
}