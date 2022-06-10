export let renderAmount = () => {
    
    let pluses = document.querySelectorAll(".plus");
    let minuses = document.querySelectorAll(".minus");

    document.addEventListener("renderProductModules", (event => {
        renderAmount();
    }), {once: true});


    pluses.forEach(plus => {

        plus.addEventListener("click", () => {

            let input = (plus.parentNode.querySelector(".amount"));
            input.value = parseInt(input.value) + 1;
        });
    });

    minuses.forEach(minus => {

        minus.addEventListener("click", () => {

            let input =(minus.parentNode.querySelector(".amount"));

            // if (input.value > 1) {

                input.value = parseInt(input.value) - 1;
            // }
        });
    });
}