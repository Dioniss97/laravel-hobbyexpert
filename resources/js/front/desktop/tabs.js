export let renderTabs = () => {

    let tabs = document.querySelectorAll(".tab");
    let contents = document.querySelectorAll(".content");

    document.addEventListener("loadSection", (event => {
        if (event.detail.section.includes('products')) {
            renderTabs();
        }
    }), {once: true});

    if (tabs) {
        
        tabs.forEach((tab, i) => {

            tab.addEventListener("click", () => {

                tabs.forEach((tab, i) => {
                    contents[i].classList.remove("active");
                    tab.classList.remove("active");
                });
                contents[i].classList.add("active");
                tab.classList.add("active");
            });
        });
    }
}