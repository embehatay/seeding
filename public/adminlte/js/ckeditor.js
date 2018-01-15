CKEDITOR.editorConfig = function( config ) {
    config.height = 400
    config.filebrowserBrowseUrl = '/adminlte/plugins/ckfinder/ckfinder.html'
    config.filebrowserImageBrowseUrl = '/adminlte/plugins/ckfinder/ckfinder.html?type=Images'
    config.filebrowserFlashBrowseUrl = '/adminlte/plugins/ckfinder/ckfinder.html?type=Flash'
    config.filebrowserUploadUrl = '/adminlte/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    config.filebrowserImageUploadUrl = '/adminlte/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    config.filebrowserFlashUploadUrl = '/adminlte/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    config.toolbarGroups = [
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
        { name: 'links' },
        { name: 'insert' },
        { name: 'forms' },
        { name: 'tools' },
        { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'others' },
        //'/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'styles' },
        { name: 'colors' }
    ]
}