export let renderSelectTabs = () => {
let contents = document.querySelectorAll(".content");
let tabsSelects = document.querySelectorAll(".select-tabs");

console.log(contents, tabsSelects);

tabsSelects.forEach(tabsSelect => {

    tabsSelect.addEventListener("change", () => {

        console.log(tabsSelect.selectedIndex, typeof tabsSelect.selectedIndex.toString(), tabsSelect.closest(".form"));

        contents.forEach(content => {

            console.log(content.dataset.target);

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