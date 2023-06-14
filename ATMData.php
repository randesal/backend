<!DOCTYPE html>
<html lang="en">
    <?php echo file_get_contents("./html/head.html"); ?>
<body>
<nav>
    <?php echo file_get_contents("./html/nav.html"); ?>
</nav>
<main>
    <div class="container align-contents-center">
        <div class="row">
            <div class="col">
                <table class="table">
                <?php require("./table.php"); ?>  
                </table> 
            </div>
        </div> 
    </div> 
</body>
</html>