// import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// export let renderCkeditor = () => {

//     let textAreas = document.querySelectorAll(".editor");

//     document.addEventListener("renderFormModules", (event => {
//         renderCkeditor();
//     }), {once: true}); // Y se ejecutará solo una vez.

//     textAreas.forEach(textArea => {

//         ClassicEditor.create(textArea)
//             .then(editor => {
//                 window.editor = editor;
//             })
//             .catch(error => {
//                 console.error('There was a problem initializing the editor.', error);
//             });
//     });
// }

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export let renderCkeditor = () => {

    document.addEventListener("renderFormModules",( event =>{ // Cuando se ejecute el evento renderFormModules,
        renderCkeditor();                                    // se ejecutará la función renderCkeditor().
    }) , {once: true});                                     // Y se ejecutará solo una vez.

    window.ckeditors = [];

    document.querySelectorAll('.ckeditor').forEach(ckeditor => { 

        ClassicEditor.create(ckeditor, {
            
            toolbar: {
                items: [
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'blockQuote',
                    'undo',
                    'redo'
                ]
            }
        })
        .then( classicEditor => {
            ckeditors[ckeditor.name] = classicEditor;
        })
        .catch( error => {
            console.error(error);
        } );
    });
}