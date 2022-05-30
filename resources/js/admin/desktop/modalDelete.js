export let renderModalDelete = () => {

    let modalDelete = document.querySelector(".window-container");
    let deleteConfirm =  document.querySelector(".accept");
    let deleteCancel = document.querySelector(".denie");

    document.addEventListener("openModalDelete",( event =>{
        
        deleteConfirm.dataset.url = event.detail.url;
        modalDelete.classList.add('active');
    }));

    deleteCancel.addEventListener("click", () => {
        modalDelete.classList.remove('active');
    });

    deleteConfirm.addEventListener("click", () => {

        let url = deleteConfirm.dataset.url;

        console.log(url);
    
        let sendDeleteRequest = async () => {

            let response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                },
                method: 'DELETE', 
            })
            .then(response => {
                          
                if (!response.ok) throw response;

                return response.json();
            })
            .then(json => {

                if(json.table){
                    document.dispatchEvent(new CustomEvent('loadTable', {
                        detail: {
                            table: json.table,
                        }
                    }));
                }

                document.dispatchEvent(new CustomEvent('loadForm', {
                    detail: {
                        form: json.form,
                    }
                }));

                modalDelete.classList.remove('active');

                document.dispatchEvent(new CustomEvent('renderFormModules'));
                document.dispatchEvent(new CustomEvent('renderTableModules'));
            })
            .catch(error =>  {

                if(error.status == '500'){
                    console.log(error);
                };
            });
        };

        sendDeleteRequest();
    });   
}