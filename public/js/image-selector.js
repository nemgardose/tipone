//For creating company
$('#browse_file').on('click', function() {
    $('#photo').click();
})

$('#photo').on('change', function(e) {
    showFile(this, '#showPhoto');
})

//For editing company
$('#browse_file_edit').on('click', function() {
    $('#photo_edit').click();
})

$('#photo_edit').on('change', function(e) {
    showFile(this, '#editShowPhoto');
})

function showFile(fileInput, img, showName)
{
    if(fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $(img).attr('src', e.target.result);
        }
        reader.readAsDataURL(fileInput.files[0]);
    }
    $(showName).text(fileInput.files[0].name)
};