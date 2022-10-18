<?php
require('bdd.php');
$msg = "";
$css_class = "";
if (isset($_POST['save-user'])) {
    echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

    $bio = $_POST['bio'];
    $profileImage = time() . '__' . $_FILES['profileImage']['name'];

    $target = 'images/' .  $profileImage;

    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
        $query = $bdd->prepare("INSERT INTO users(profileimage, bio) VALUES(?,?)");
        $answer = $query->execute(array($profileImage, $bio));

        if ($answer) {
            $msg = "image uploaded and saved to database";
            $css_class = "alert-success";
        } else {
            $msg = "Dtabase Error: Failed to save user";
            $css_class = "alert-danger";
        }
    } else {
        $msg = "Failed to upload";
        $css_class = "alert-danger";
    }
}
