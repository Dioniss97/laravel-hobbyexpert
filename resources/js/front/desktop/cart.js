export let renderCart = () => {

    let forms = document.querySelectorAll('.front-form');
    let addToCartButton = document.querySelector('.add-to-cart-button');

    document.addEventListener("renderProductModules",( event =>{
        renderCart();
    }), {once: true});

    if(addToCartButton) {

        addToCartButton.addEventListener("click", (event) => {

            event.preventDefault();

            forms.forEach(form => { 

                let data = new FormData(form);
                let url = form.action;

                console.log(data);

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

                        console.log(json.content);

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
}