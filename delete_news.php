<?php

include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM news WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location:view_news.php");

?>