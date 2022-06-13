export let renderMenu = () => {

    let mainContainer = document.querySelector('main');
    let menuItems = document.querySelectorAll('.menu-item');

    document.addEventListener("renderMenu",( event =>{
        renderMenu();
    }), {once: true});

    menuItems.forEach(menuItem => {

        menuItem.addEventListener('click', () => {

            let url = menuItem.dataset.url;

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

                        document.dispatchEvent(new CustomEvent('renderMenuModules'));
                        document.dispatchEvent(new CustomEvent('renderProductModules'));
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