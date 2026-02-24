<?php

/* file writes*/

$file=fopen("uploads\c1.txt","w");
fwrite($file,"hello harshitha\n");
fwrite($file,"welcome to php file functions.\n");
fclose($file);
echo "successfully entered";


/* file reads */

$file=fopen("uploads\c1.txt","r");
$content=fread($file,filesize("uploads\c1.txt"));
fclose($file);
echo "<h3>File content</h3>";
echo nl2br($content);


/* file contents */

echo "<h3>using file_get_contents():</h3>";
echo nl2br(file_get_contents("uploads\c1.txt"));


/*file information */

echo "<h3>file information:</h3>";
echo "file exists: " . (file_exists("uploads\c1.txt") ? "yes" : "no") . "<br>";
echo "file size: " . filesize("uploads\c1.txt") . " bytes<br>";
echo "file type: " . filetype("uploads\c1.txt") . "<br>";
echo "last modified: " . date("y-m-d H:i:s",filemtime("uploads\c1.txt")) . "<br>";


/* directory change */

mkdir("test_folder");
echo "<br>Folder created</br>";


/* change directory */

echo "current directory: " . getcwd() . "<br>"; 
chdir("test_folder");
echo "changed directory: " . getcwd() . "<br>";
chdir("..");


/* directory handling */

echo "<h3>Files in current directory:</h3>";
$files=scandir(".");
foreach($files as $f)
    {
    echo $f . "<br>";
}
    
 
/* file modes */

echo "<h2>file modes demonstration</h2>";
$file=fopen("uploads\c1.txt","w");
fwrite($file,"initial data\n");
fclose($file);



$file=fopen("uploads\c1.txt","r");
echo "r mode: " . fread($file,filesize("uploads\c1.txt")) . "<br>";
fclose($file);


$file=fopen("uploads\c1.txt","a");
fwrite($file,"appended data\n");
fclose($file);
?>