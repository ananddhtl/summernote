<?php
if(empty($_FILES['file']))
{
exit();
}

$temp = explode(".", $_FILES["file"]["name"]);

// echo $_FILES["file"]["name"];
$newfilename = round(microtime(true)) . '.' . end($temp);
$destinationFilePath = 'img-uploads/'.$newfilename ;
if(!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)){

}
else{
echo $destinationFilePath;
}

?>