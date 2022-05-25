export let renderSelectTabs = () => {
let contents = document.querySelectorAll(".content");
let tabsSelects = document.querySelectorAll(".select-tabs");

tabsSelects.forEach(tabsSelect => {

    tabsSelect.addEventListener("change", () => {

        contents.forEach(content => {

            if (tabsSelect.closest(".form") == content.closest(".form")) {

                content.classList.remove("active");

                if (tabsSelect.selectedIndex.toString() == content.dataset.target) {

                    content.classList.add("active");
                }
            }
        });
    });
});
}