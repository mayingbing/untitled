<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <title>HTML Upload File</title>
</head>
<body>
<form action="upload.php" method="post" enctype = "multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    choose the file need be uploaded:<input type="file" id="upfile" name="upfile"/><br>
    <input type="submit" value="upload" id = "submit"/>
</form>
</body>
</html>
upload.php:
<?php
$dirfile ='C:\\zhulei\\Rubbish\\PHP Program\\PHPUpload\\';
if(!isset($_FILES['upfile']))
{//如果没有提交过来，就提示没有文件，从新上传
    echo "no file,please <a href = 'HTML.php'> upload </a> again!";
}
else
{
    $fileImg = $_FILES['upfile'];
    if(!in_array($fileImg['type'], array('image/jpeg','image/jpg','image/png')))
    {//如果文件不是png或jpg 图片，提示必须限定这两种
        echo "just can upload jpg and png picture,please <a href = 'HTML.php'> upload </a> again!";
    }
    else
    {
        if(!move_uploaded_file($fileImg['tmp_name'], $dirfile.$fileImg['name']))
        {//如果从临时文件拷贝到我们的目标路径失败，就提示错误
            echo "move file error, please <a href = 'HTML.php'> upload </a> again!";
        }
        else
        {
            echo "upload successful!";//如果都ok,就提示上传成功
        }
    }
}
?>

