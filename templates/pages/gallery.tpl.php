<?php

    // Collecting data:    
    $images = array();
    $reader = opendir($FOLDER);
    while (($file = readdir($reader)) !== false) {
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES)) {
                $images[$file] = filemtime($FOLDER.$file);
            }
        }
    }
    closedir($reader);
?>
    <div id="gallery">
    <h1>Gallery</h1>
    <?php
    arsort($images);
    foreach($images as $file => $date)
    {
    ?>
        <div class="image">
            <a href="<?php echo $FOLDER.$file ?>">
                <img src="<?php echo $FOLDER.$file ?>">
            </a>            
            <p>Name:  <?php echo $file; ?></p>
            <p>Date:  <?php echo date($DATEFORMAT, $date); ?></p>
        </div>
    <?php
    }
    ?>
    </div>
