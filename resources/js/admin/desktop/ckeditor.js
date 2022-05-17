import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export let renderCkeditor = () => {

  let textAreas = document.querySelectorAll(".editor");

  textAreas.forEach(textArea => {

    ClassicEditor.create(textArea)
      .then(editor => {
        window.editor = editor;
      })
      .catch(error => {
        console.error('There was a problem initializing the editor.', error);
      });
  });
}