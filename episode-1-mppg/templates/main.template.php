<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zulu | Episode 1 - Metin2 PayPal Payment Gateway [M.P.P.G] v1.0</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:600&display=swap" rel="stylesheet">

    <!-- Vendors -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Preload-Scripts -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
</head>

<body>

<!-- \.Header -->
<header class="text-center py-5">
    <img src="assets/img/logo.png" class="img-fluid" alt="logo">
</header>
<!-- Header./ -->

<!-- \.Content -->
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">

            <?php if (isset($_GET['install']) && $_GET['install'] == 'success'): ?>
                <!-- \.Success Alert after Installation -->
                <div class="alert alert-success" role="alert">
                    <h3 class="text-success">SUCCESS!</h3>
                    <p class="text-success">If you're watching this alert it means you've installed the script
                        correctly.</p>
                    <p class="text-muted">Redirecting in 3 seconds.</p>
                </div>
                <!-- Redirect to clean index -->
                <?php header('refresh:3;url=./');
                die(); ?>
                <!-- Success Alert after Installation./ -->
            <?php endif; ?>

            <!-- \.Form -->
            <form class="gateway-form text-center" method="POST" action="<?= $ipn->getPaypalUri() ?>">
                <input type="hidden" name="business" value="<?= $parameters['paypal_email']; ?>"/>
                <input type="hidden" name="notify_url" value="<?= $parameters['ipn_script']; ?>"/>
                <input type="hidden" name="cancel_return" value="<?= $parameters['return_error']; ?>"/>
                <input type="hidden" name="return" value="<?= $parameters['return_success']; ?>"/>
                <input type="hidden" name="rm" value="2"/>
                <input type="hidden" name="lc" value=""/>
                <input type="hidden" name="no_shipping" value="1"/>
                <input type="hidden" name="no_note" value="1"/>
                <input type="hidden" name="currency_code" value="<?= $parameters['currency_code']; ?>"/>
                <input type="hidden" name="page_style" value="paypal"/>
                <input type="hidden" name="charset" value="utf-8"/>
                <input type="hidden" name="item_name" value="Coins"/>
                <input type="hidden" name="cbt" value="Back to FormGet"/>
                <input type="hidden" value="_xclick" name="cmd"/>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="custom" id="username" placeholder="Your username..."
                           required>
                </div>

                <div class="form-group">
                    <label for="prices">Amount</label>
                    <select class="form-control" name="amount" id="prices">
                        <option selected disabled>Select Price and Amount</option>
                        <?php foreach ($parameters['costs'] as $key => $value): ?>
                            <option value="<?= $key ?>"><?= $value ?> Coins - <?= $key.' '.$parameters['currency_code'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-sm btn-primary" type="submit">
                        Send
                    </button>
                </div>
            </form>
            <!-- Form./ -->

        </div>
    </div>
</div>
<!-- Content./ -->

<!-- \.Footer -->
<footer class="pt-5">
    <div class="container">
        <div class="col-md-12 text-center">
            Copyright @ <?= date('Y') ?> - <?= $parameters['server_name'] ?>. All rights reserved.
        </div>
    </div>
</footer>
<!-- Footer./ -->

</body>

<!-- Vendors -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Script -->
<script src="assets/js/app.js"></script>

</html>