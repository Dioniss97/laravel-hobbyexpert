export let renderProduct = () => {

    let mainContainer = document.querySelector("main");
    // let addButton = document.querySelector(".add-to-cart-button");
    // let amount = document.querySelector(".amount");
    // let idPrice = document.querySelector(".id-price");
    let viewButtons = document.querySelectorAll(".product-view-button");
    let categoryTargets = document.querySelectorAll(".category-target");
    let orderBySelect = document.querySelector(".order-by-select");

    document.addEventListener("renderProductModules", (event => {
        renderProduct();
    }), {once: true});

    if (viewButtons) {

        viewButtons.forEach(viewButton => {

            viewButton.addEventListener("click", () => {

                let url = viewButton.dataset.url;

                let sendGetRequest = async () => {

                    let response = await fetch(url, {

                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            },

                            method: 'GET',
                        })
                        .then(response => {

                            if (!response.ok) throw response;

                            return response.json();
                        })
                        .then(json => {

                            mainContainer.innerHTML = json.content;

                            document.dispatchEvent(new CustomEvent("renderProductModules"));
                        })
                        .catch(error => {

                            // document.dispatchEvent(new CustomEvent('stopWait'));

                            if (error.status == '422') {

                                error.json().then(jsonError => {

                                    let errors = jsonError.errors;
                                    let errorMessage = '';

                                    Object.keys(errors).forEach(function (key) {
                                        errorMessage += '<li>' + errors[key] + '</li>';
                                    })

                                    document.dispatchEvent(new CustomEvent('message', {
                                        detail: {
                                            message: errorMessage,
                                            type: 'error'
                                        }
                                    }));
                                })
                            }

                            if (error.status == '500') {
                                console.log(error);
                            };
                        });
                };

                sendGetRequest();
            });
        });
    }

    if (categoryTargets) {

        categoryTargets.forEach(categoryTarget => {

            categoryTarget.addEventListener("click", () => {

                // categoryTargets.forEach(categoryTarget => {

                //     categoryTarget.classList.remove("active");
                // });

                // categoryTarget.classList.add("active");

                let url = categoryTarget.dataset.url;

                let sendGetRequest = async () => {

                    let response = await fetch(url, {

                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            },

                            method: 'GET',
                        })
                        .then(response => {

                            if (!response.ok) throw response;

                            return response.json();
                        })
                        .then(json => {

                            mainContainer.innerHTML = json.content;

                            document.dispatchEvent(new CustomEvent("renderProductModules"));
                        })
                        .catch(error => {

                            // document.dispatchEvent(new CustomEvent('stopWait'));

                            if (error.status == '422') {

                                error.json().then(jsonError => {

                                    let errors = jsonError.errors;
                                    let errorMessage = '';

                                    Object.keys(errors).forEach(function (key) {
                                        errorMessage += '<li>' + errors[key] + '</li>';
                                    })

                                    document.dispatchEvent(new CustomEvent('message', {
                                        detail: {
                                            message: errorMessage,
                                            type: 'error'
                                        }
                                    }));
                                })
                            }

                            if (error.status == '500') {
                                console.log(error);
                            };
                        });
                };

                sendGetRequest();
            });
        });
    }

    if(orderBySelect) {

        orderBySelect.addEventListener("change", () => {

            let url = orderBySelect.value;

            let sendGetRequest = async () => {

                let response = await fetch(url, {

                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                        },

                        method: 'GET',
                    })
                    .then(response => {

                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        mainContainer.innerHTML = json.content;

                        document.dispatchEvent(new CustomEvent("renderProductModules"));
                    })
                    .catch(error => {

                        // document.dispatchEvent(new CustomEvent('stopWait'));

                        if (error.status == '422') {

                            error.json().then(jsonError => {

                                let errors = jsonError.errors;
                                let errorMessage = '';

                                Object.keys(errors).forEach(function (key) {
                                    errorMessage += '<li>' + errors[key] + '</li>';
                                })

                                document.dispatchEvent(new CustomEvent('message', {
                                    detail: {
                                        message: errorMessage,
                                        type: 'error'
                                    }
                                }));
                            })
                        }

                        if (error.status == '500') {
                            console.log(error);
                        };
                    });
            };

            sendGetRequest();
        });
    }
}