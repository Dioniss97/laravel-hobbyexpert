export let renderProduct = () => {

    let addButton = document.querySelector(".add-to-cart-button");
    let amount = document.querySelector(".amount");

    if (addButton) {

        addButton.addEventListener("click", () => {

            if (amount.value > 0) {
                document.dispatchEvent(new CustomEvent("message", {
                    detail: {
                        text: "Producto añadido con éxito.",
                        type: "success"
                    }
                }));
            } else {
                document.dispatchEvent(new CustomEvent("message", {
                    detail: {
                        text: "Ups, algo ha salido mal.",
                        type: "error"
                    }
                }));
            }
        });
    }
}