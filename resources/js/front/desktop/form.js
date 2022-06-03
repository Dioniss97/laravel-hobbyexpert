export let renderForm = () => {
    
    let storeButton = document.querySelector('.store-button');
    let forms = document.querySelectorAll('.front-form');
    let formElements = document.querySelectorAll('.form-element');

    document.addEventListener("clearForm",( event => {
        formElements.forEach(element => {
            element.value = "";
        });
    }), {once: true});

    document.addEventListener("loadForm",( event =>{
        formContainer.innerHTML = event.detail.form;
    }), {once: true});

    document.addEventListener("renderFormModules",( event =>{
        renderForm();
    }), {once: true});

    if(storeButton) {

        storeButton.addEventListener("click", (event) => {

            event.preventDefault();
    
            forms.forEach(form => { 

                /*
                    En las siguientes líneas se obtiene el valor del formulario a través de un objeto FormData
                    y se captura la url que usaremos para enviar los datos al servidor.
                */

                let data = new FormData(form);
                let url = form.action;

                for (var pair of data.entries()) { // Se recorre el objeto FormData para obtener los datos del formulario.
                    console.log(pair[0]+ ', ' + pair[1]); // Se imprimen los datos del formulario.
                }

                /*
                    En el siguiente valor estamos capturando los datos del ckeditor y se los añadimos a los datos
                    del formData. 
                */
    
                if( ckeditors != 'null'){
    
                    Object.entries(ckeditors).forEach(([key, value]) => {
                        data.append(key, value.getData());
                    });
                }

                /*
                    A continuación vamos a hacer una llamada de tipo POST mediante fetch, esta vez vamos a 
                    añadir en los headers el token que nos ha dado Laravel el cual va a prevenir que se puedan 
                    hacer ataques de tipos cross-site scripting.
                */
    
                let sendPostRequest = async () => {

                    // document.dispatchEvent(new CustomEvent('startWait'));

                    let response = await fetch(url, { // Esto es una promesa que se quedará esperando hasta que la llamada sea
                                                     // exitosa o fallida.
                        headers: {
                            'Accept': 'application/json', // Indicamos que vamos a recibir una respuesta en formato JSON.
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST', // En este caso vamos a hacer una llamada POST.
                        body: data // En el body vamos a pasarle los datos del formulario.
                    })
                    .then(response => { // response es una promesa que se quedará esperando hasta que la llamada sea exitosa o fallida.
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        formContainer.innerHTML = json.form; // Obtenemos el formulario con los datos actualizados.

                        document.dispatchEvent(new CustomEvent('loadTable', {
                            detail: {
                                table: json.table,
                            }
                        }));

                        document.dispatchEvent(new CustomEvent('renderFormModules'));
                        document.dispatchEvent(new CustomEvent('renderTableModules'));

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