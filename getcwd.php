<?php
$path = getcwd();
echo "This Is Your Absolute Path: ";
echo $path;
?>

<?php
    $dir = dirname(__FILE__);
    echo "<p>Full path to a .htpasswd file in this dir: " .
        $dir . "/.htpasswd" . "</p>";
?>
