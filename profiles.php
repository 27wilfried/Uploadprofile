<?php
//require('bdd.php');
require('processForm.php');
?>
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
                <div class="col-4  offset-md-4 " style="margin-top: 100px;border:1px solid #e0e0e0; padding: 15px;">
                    <table class="table table-bordered">
                        <thead>
                            <th style="color: #e0e0e0;">Profile Image</th>
                            <th style="color: #e0e0e0;">Bio</th>
                        </thead>
                        <tbody>
                            <?php
                            require('processForm.php');
                            require('bdd.php');
                            $requet = $bdd->query('SELECT * FROM users ORDER BY id DESC');
                            $users = $requet->fetchAll(PDO::FETCH_ASSOC);

                            ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td>
                                        <img src="images/<?php echo $user['profileImage']; ?>" width="80" />
                                    </td>
                                    <td style="color: white;">
                                        <?php echo $user['bio']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script src="assets\vendor\js\script.js"></script>
</body>

</html>