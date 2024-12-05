<?php
var_dump($_FILES);

$target_dir = "../../public/img/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$target_file);
?>