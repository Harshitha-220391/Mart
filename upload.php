<?php
$message="";
if(isset($_POST['upload'])){
    $targetdir="uploads";
    $filename=basename($_FILES["file"]["name"]);
    $targetfile=$targetdir . $filename;
    if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetfile))
        {
            $message="file uploaded successfully!";
        }
        else{
            $message="File upload failed";
        }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>file upload</title>
</head>
<body>
    <h2>upload file</h2>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit" name="upload">upload</button>
</form>
<p><?php echo $message; ?></p>

<?php
if(isset($filename)){
    echo "<a href='download.php?file=$filename'>Download File</a>";
}
?>
    </html>