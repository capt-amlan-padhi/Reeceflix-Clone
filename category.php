<?php
require_once("includes/header.php");

if (!isset($_GET['id'])) {
    ErrorMessage::shows('No id passed to the page');
}

$preview = new PreviewProvider($con,$userLoggedIn);
echo $preview->createCategoryPreviewVideo($_GET['id']);

$containers = new CategoryContainers($con,$userLoggedIn);
echo $containers->showCategory($_GET['id']);


?>

