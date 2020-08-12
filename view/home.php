
<?php
include ('stylesheet.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<?php
include('parts/header.php');
?>
<div id='test' class="d-flex justify-content-center">
    <div class="cadre col-9 bg-light p-2">
        <?php
            include('parts/menu.php');
        ?>
<!--        <div class="d-flex justify-content-around bg-light border rounded">-->
        <h4 class="text-uppercase border border-secondary border-left-0 border-top-0 border-right-0 bg-light">mes recettes de ravioles</h4>
            <?php
                include('parts/listRavioles.php');
             ?>
<!--        </div>-->
    </div>
</div>
</body>

