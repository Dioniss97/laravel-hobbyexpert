export let renderCart = () => {

    let formContainer = document.querySelector('.form-container');
    let form = document.querySelector('.front-form');
    let addToCartButton = document.querySelector('.add-to-cart-button');
    let mainContainer = document.querySelector('main');
    let pluses = document.querySelectorAll(".cart-plus");
    let minuses = document.querySelectorAll(".cart-minus");
    let buyButton = document.querySelector(".buy-button");
    let purchaseButton = document.querySelector(".purchase-button");

    document.addEventListener("cart", (event => {
        renderCart();
    }), {once: true});


    if(buyButton) {

        buyButton.addEventListener("click", (event) => {

            event.preventDefault();

            let url = buyButton.dataset.url;

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

                    document.dispatchEvent(new CustomEvent('checkout'));
                })
                .catch ( error =>  {

                    if(error.status == '422'){
    
                        error.json().then(jsonError => {

                            let errors = jsonError.errors;      
                            let errorMessage = '';
        
                            Object.keys(errors).forEach(function(key) {
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

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };
    
            sendGetRequest();
        });
    }

    if(purchaseButton) {

        purchaseButton.addEventListener("click", (event) => {

            event.preventDefault();

            let url = purchaseButton.dataset.url;
            let data = new FormData(form);

            for (var pair of data.entries()) {
                console.log(pair[0]+ ', ' + pair[1]);
            }

            let sendPostRequest = async () => {

                let response = await fetch(url, {

                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    method: 'POST',
                    body: data
                })
                .then(response => {
                
                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    mainContainer.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('checkout'));
                })
                .catch ( error =>  {

                    if(error.status == '422'){
    
                        error.json().then(jsonError => {

                            let errors = jsonError.errors;      
                            let errorMessage = '';
        
                            Object.keys(errors).forEach(function(key) {
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

                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };
    
            sendPostRequest();
        });
    }

    if(pluses) {

        pluses.forEach(plus => {

        plus.addEventListener("click", (event) => {

            event.preventDefault();

                let url = plus.dataset.url;

                console.log(url);

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
                    })
                    .catch ( error =>  {

                        if(error.status == '422'){
        
                            error.json().then(jsonError => {

                                let errors = jsonError.errors;      
                                let errorMessage = '';
            
                                Object.keys(errors).forEach(function(key) {
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

                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
                sendGetRequest();
            });
        });
    }

    if(minuses) {

        minuses.forEach(minus => {

        minus.addEventListener("click", (event) => {

            event.preventDefault();

                let url = minus.dataset.url;

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
                    })
                    .catch ( error =>  {

                        if(error.status == '422'){
        
                            error.json().then(jsonError => {

                                let errors = jsonError.errors;      
                                let errorMessage = '';
            
                                Object.keys(errors).forEach(function(key) {
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

                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
                sendGetRequest();
            });
        });
    }

    if(addToCartButton) {

        addToCartButton.addEventListener("click", (event) => {

            console.log('addToCartButton');

            event.preventDefault();

                let data = new FormData(form);
                let url = form.action;

                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]);
                }

                let sendPostRequest = async () => {

                    let response = await fetch(url, {

                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST',
                        body: data
                    })
                    .then(response => {
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        mainContainer.innerHTML = json.content;

                        document.dispatchEvent(new CustomEvent('cart'));
                    })
                    .catch ( error =>  {

                        if(error.status == '422'){
        
                            error.json().then(jsonError => {

                                let errors = jsonError.errors;      
                                let errorMessage = '';
            
                                Object.keys(errors).forEach(function(key) {
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

                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
            sendPostRequest();
        });
    }
}