<?php
    $imgname = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $filepath = 'upload/';
    if(move_uploaded_file($tmp,$filepath.$imgname.".png")){
        echo "上传成功";
    }else{
        echo "上传失败";
    }
?>