export let renderAmount = () => {
    
    let pluses = document.querySelectorAll(".plus");
    let minuses = document.querySelectorAll(".minus");

    document.addEventListener("products", (event => {
        renderAmount();
    }), {once: true});


    pluses.forEach(plus => {

        plus.addEventListener("click", (event) => {

            event.preventDefault();

            let input = (plus.parentNode.querySelector(".amount"));
            input.value = parseInt(input.value) + 1;
        });
    });

    minuses.forEach(minus => {

        minus.addEventListener("click", (event) => {

            event.preventDefault();

            let input =(minus.parentNode.querySelector(".amount"));

                input.value = parseInt(input.value) - 1;
        });
    });
}