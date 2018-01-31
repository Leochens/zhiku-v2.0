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
        url: "upload.php",  
        cache: false,  
        contentType: false,  
        processData: false,  
        success: function(data) {//data是返回的hash,key之类的值，key是定义的文件名  
                $('#summernote').summernote('insertImage', data.data);  
            },  
            error:function(){  
                alert("上传失败");  
            } 
    });  
}  
  
</script>  
</body>  
</html>