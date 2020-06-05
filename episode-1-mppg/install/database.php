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
        <div class="col-md-6 mx-auto text-center">
            <h2 class="text-center py-5">Database configuration</h2>

            <?php if (isset($_GET['check']) && $_GET['check'] == 'error'): ?>
                <div class="alert alert-danger" role="alert">
                    ERROR! Something is wrong with the database provided.
                </div>
            <?php endif; ?>

            <form method="POST" action="db_check.php">
                <div class="form-group">
                    <label for="db_host">Server Database IP (*required)</label>
                    <input class="form-control" type="text" name="db_host" id="db_host" required
                           placeholder="127.0.0.1">
                </div>
                <div class="form-group">
                    <label for="db_user">Server Database User (*required)</label>
                    <input class="form-control" type="text" name="db_user" id="db_user" required placeholder="root">
                </div>
                <div class="form-group">
                    <label for="db_password">Server Database Password (*required)</label>
                    <input class="form-control" type="password" name="db_password" id="db_password" required
                           placeholder="123456789">
                </div>
                <div class="form-group">
                    <label for="db_port">Server Database Port (*required)</label>
                    <input class="form-control" type="text" name="db_port" id="db_port" value="3306" required
                           placeholder="3306">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Send Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

<!-- Vendors -->
<script src="assets/js/bootstrap.min.js"></script>
</html>
