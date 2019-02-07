// Editor block
tinymce.init({
    selector:'#editable_body',
    forced_root_block : 'p', 
    force_br_newlines : true, 
    force_p_newlines : false,
    plugins: "save",
    toolbar: [
        'bold italic underline strikethrough | alignleft aligncenter alignright | alignjustify | styleselect formatselect fontselect fontsizeselect | bullist numlist | outdent indent | blockquote | undo redo | removeformat',
        'save'
      ],
    height : 500,
    branding: false
}); 

/* // Title
tinymce.init({
    selector: '#editable_title',
    forced_root_block : '', 
    inline: false,
    menubar: false,
    toolbar: false,
    height : 10,
    branding: false
}); */
