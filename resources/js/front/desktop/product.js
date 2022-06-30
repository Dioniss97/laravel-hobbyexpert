export let renderProduct = () => {

    let mainContainer = document.querySelector("main");
    let viewButtons = document.querySelectorAll(".product-view-button");
    let categoryTargets = document.querySelectorAll(".category-target");
    let orderBySelect = document.querySelector(".order-by-select");

    document.addEventListener("cart", (event => {
        renderCart();
    }), {once: true});

    document.addEventListener("products", (event => {
        renderProducts();
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

                            document.dispatchEvent(new CustomEvent('cart'));
                            document.dispatchEvent(new CustomEvent('products'));
                        })
                        .catch(error => {

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

                            document.dispatchEvent(new CustomEvent('loadSection', {
                                detail: {
                                    section: 'products'
                                }
                            }));
                        })
                        .catch(error => {

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

                        document.dispatchEvent(new CustomEvent('loadSection', {
                            detail: {
                                section: 'products'
                            }
                        }));
                    }).catch(error => {

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