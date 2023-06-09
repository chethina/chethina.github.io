<?php
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];


    $file = fopen("loc.txt", "w");
    fwrite($file, "Latitude: " . $latitude . "\nLongitude: " . $longitude);
    fclose($file);
}
?>
