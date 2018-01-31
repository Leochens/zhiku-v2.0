<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>summernote</title>
    <!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
</head>
<body>
<div id="summernote">Hello Summernote</div>  
  
<script language="javascript">  
  
  
$(document).ready(function() {  
    $('#summernote').summernote({  
        height: "500px",  
        callbacks: {  
            onImageUpload: function(files) { //the onImageUpload API  
                img = sendFile(files[0]);  
        }  
    }  
    });  
});  
  
function sendFile(file) {  
    data = new FormData();  
    data.append("file", file);  
    console.log(data);  
    $.ajax({  
        data: data,  
        type: "POST",  
        url: "{:U('./upload')}",  
        cache: false,  
        contentType: false,  
        processData: false,  
        success: function(url) {  
              $("#summernote").summernote('insertImage', url, 'image name'); // the insertImage API  
        }  
    });  
}  
  
</script>  
</body>  
</html>