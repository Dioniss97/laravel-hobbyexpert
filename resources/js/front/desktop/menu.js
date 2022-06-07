export renderMenu = () => {

    let mainContainer = document.querySelector('.body');
    let menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(menuItem => {

        menuItem.addEventListener('click', () => {

            let url = menuItem.dataset.url;

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
