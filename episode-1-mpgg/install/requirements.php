<?php
    $errors = 0;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zulu | Episode 1 - Server Requirements</title>

    <!-- Vendors -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Preload-Scripts -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center py-5">Checking your system configuration</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Install Script File & Folder Permissions <br> (The folders "Install" and "Config" with their files MUST have 777 permissions, if not then change it!)</td>
                        <td><?php substr(decoct(fileperms("db_check.php")),3) != '777' ? print_r('<span class="text-danger">'.substr(decoct(fileperms("db_check.php")),3).' <i class="fa fa-times"></i></span>').$errors++ : print_r('<span class="text-success">'.substr(decoct(fileperms("db_check.php")),3).' <i class="fa fa-check"></i></span>'); ?></td>
                    </tr>
                    <tr>
                        <td>PHP Version (Must be 5 or later)</td>
                        <td><?php phpversion() < 5 ? print_r('<span class="text-danger">'.phpversion().' <i class="fa fa-times"></i></span>').$errors++ : print_r('<span class="text-success">'.phpversion().' <i class="fa fa-check"></i></span>'); ?></td>

                    </tr>
                    <tr>
                        <td>mysqli Extension</td>
                        <td><?= class_exists('mysqli') ? '<span class="text-success">Enabled <i class="fa fa-check"></i></span>' : '<span class="text-danger">Disabled <i class="fa fa-times"></i></span>'.$errors++; ?></td>
                    </tr>
                    <tr>
                        <td>Safe mode must be "off"</td>
                        <td><?= !ini_get("safe_mode") ? '<span class="text-success">Disabled <i class="fa fa-check"></i></span>' : '<span class="text-danger">Enabled <i class="fa fa-times"></i></span>'.$errors++; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php if($errors == 0): ?>
            <button onclick="window.location.href='database.php'" class="btn btn-primary">Continue</button>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>

<!-- Vendors -->
<script src="assets/js/bootstrap.min.js"></script>
</html>