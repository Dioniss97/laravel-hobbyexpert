export let renderCart = () => {

    let forms = document.querySelectorAll('.front-form');
    // let form = document.querySelector('.front-form');
    let addToCartButton = document.querySelector('.add-to-cart-button');
    let mainContainer = document.querySelector('main');
    let pluses = document.querySelectorAll(".cart-plus");
    let minuses = document.querySelectorAll(".cart-minus");
    let buyButton = document.querySelector(".purchase-button");

    document.addEventListener("renderProductModules",( event =>{
        renderCart();
    }), {once: true});

    if(buyButton) {

        // pluses.forEach(plus => {

        buyButton.addEventListener("click", (event) => {

            event.preventDefault();

            // forms.forEach(form => { 

            let url = buyButton.dataset.url;

            console.log(url);

            let sendPostRequest = async () => {

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

                    mainContainer.innerHTML = json.content; // Aquí se renderiza el contenido del formulario

                    document.dispatchEvent(new CustomEvent('renderProductModules'));

                })
                .catch ( error =>  {

                    // document.dispatchEvent(new CustomEvent('stopWait'));

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

            // forms.forEach(form => { 

                let url = plus.dataset.url;

                console.log(url);

                let sendPostRequest = async () => {

                    // document.dispatchEvent(new CustomEvent('startWait'));

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

                        mainContainer.innerHTML = json.content; // Aquí se renderiza el contenido del formulario

                        document.dispatchEvent(new CustomEvent('renderProductModules'));

                    })
                    .catch ( error =>  {

                        // document.dispatchEvent(new CustomEvent('stopWait'));

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
        });
    }

    if(minuses) {

        minuses.forEach(minus => {

        minus.addEventListener("click", (event) => {

            event.preventDefault();

            // forms.forEach(form => { 

                let url = minus.dataset.url;

                let sendPostRequest = async () => {

                    // document.dispatchEvent(new CustomEvent('startWait'));

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

                        document.dispatchEvent(new CustomEvent('renderProductModules'));

                    })
                    .catch ( error =>  {

                        // document.dispatchEvent(new CustomEvent('stopWait'));

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
        });
    }

    if(addToCartButton) {

        addToCartButton.addEventListener("click", (event) => {

            event.preventDefault();

            forms.forEach(form => { 

                let data = new FormData(form);
                let url = form.action;

                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]);
                }

                let sendPostRequest = async () => {

                    // document.dispatchEvent(new CustomEvent('startWait'));

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

                        mainContainer.innerHTML = json.content; // Aquí se renderiza el contenido del formulario

                        document.dispatchEvent(new CustomEvent('renderProductModules'));

                        document.dispatchEvent(new CustomEvent('renderCartModules'));

                    })
                    .catch ( error =>  {

                        // document.dispatchEvent(new CustomEvent('stopWait'));

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
        });
    }
}