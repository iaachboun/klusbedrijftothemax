$('#my-file-selector').on('change', function(e){
    $('#upload-file-info').html(""); //clear the info before appending
    var files = $(this).prop('files');
    for (var i = 0; i < files.length; i++) {
        $('#upload-file-info').append(files[i].name);
    }
});

