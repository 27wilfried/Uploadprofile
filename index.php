<?php require('processForm.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/css/brands.min.css">
    <link rel="stylesheet" href="assets/vendor/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/vendor/css/solid.min.css">

    <title>Document</title>
</head>

<body>

    <body style="background-image: url(login_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-4  offset-5" style="margin-top: 100px;border:1px solid #e0e0e0; padding: 15px;">
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <h3 class="text-center" style="color: #e0e0e0;">Create Profile</h3>

                        <?php if (!empty($msg)) : ?>
                            <div class="alert <?php echo $css_class; ?>">
                                <?php echo $msg; ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group text-center">
                            <img src="images/téléchargement (1).png" onclick="triggerClick()" id="profileDisplay" style="display: block;width : 60%;margin:10px auto;border-radius:50%;">
                            <label for="profileImage" style="color: #e0e0e0">Choisir Image</label>
                            <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                        </div>

                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea name="bio" id=bio class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submiit" name=save-user class="btn btn-primary btn-block">Save User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="assets\vendor\js\script.js"></script>
</body>

</html>