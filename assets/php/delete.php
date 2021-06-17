<?php

require_once "config.php";

$id = $_GET['id'];

$q = " DELETE FROM places WHERE id = $id ";

mysqli_query($db, $q);

header('location: /CovidTracker/add-place.php');

?>