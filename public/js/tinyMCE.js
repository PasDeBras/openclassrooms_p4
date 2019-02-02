// Editor block
tinymce.init({
    selector:'#editable_body', 
    forced_root_block : '', 
    force_br_newlines : true, 
    force_p_newlines : false,
    plugins: "save",
    menubar: true,
    toolbar: "save",
    height : 500
}); 

// Title block
tinymce.init({
    selector: '#editable_title',
    inline: false,
    menubar: false,
    toolbar: false,
    height : 10
});
