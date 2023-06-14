<!DOCTYPE html>
<html lang="en">
    <?php echo file_get_contents("./html/head.html"); ?>
<body>
<nav>
    <?php echo file_get_contents("./html/nav.html"); ?>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php require("./table.php"); ?>
            </div>
        </div> 
    </div> 
</body>
</html>