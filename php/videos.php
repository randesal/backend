<!DOCTYPE html>
<html lang="en">
    <?php echo file_get_contents("./html/head.html"); ?>
<body>  
<nav>
<?php echo file_get_contents("./html/nav.html"); ?>
</nav>    
<main>
    <div class="container">
        <div class="h1">Videos</div> 
        <?php
        $files = scandir('./video/1. Front-End Web Development/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/1. Front-End Web Development/' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/2. Introduction to HTML/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/2. Introduction to HTML/' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/3. Intermediate HTML/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/3. Intermediate HTML/' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/4. Introduction to CSS/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/4. Introduction to CSS/' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/5. Intermediate CSS/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/5. Intermediate CSS/' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/6. Introduction to Bootstrap 4/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/6. Introduction to Bootstrap 4' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/7. Intermediate Bootstrap/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/7. Intermediate Bootstrap' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/8. Web Design School - Create a Website that People Love/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/8. Web Design School - Create a Website that People Love/' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>
        <br><hr><br>
        <?php
        $files = scandir('./video/14. jQuery/');
            foreach($files as $file) {
                if ($file != '' && $file != '.' && $file != '..' && $file != '@eaDir'){
                echo '<h6>'. basename($file) .'</h6><div class=row><video width="400" controls><source src="./video/14. jQuery/' . basename( $file ) . '" type="video/mp4"></video></div>';
                }
            }
        ?>

    </div>
</main>
</body>
</html>