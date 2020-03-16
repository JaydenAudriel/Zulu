<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zulu - Metin2 PayPal Payment Gateway [M.P.P.G] v1.0</title>

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
                <form class="gateway-form text-center" action="#">

                    <input type="hidden" name="business" value="" />
                    <input type="hidden" name="notify_url" value="" />
                    <input type="hidden" name="cancel_return" value="" />
                    <input type="hidden" name="return" value="" />
                    <input type="hidden" name="rm" value="2" />
                    <input type="hidden" name="lc" value="" />
                    <input type="hidden" name="no_shipping" value="1" />
                    <input type="hidden" name="no_note" value="1" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="hidden" name="page_style" value="paypal" />
                    <input type="hidden" name="charset" value="utf-8" />
                    <input type="hidden" name="item_name" value="HeadPhone" />
                    <input type="hidden" name="cbt" value="Back to FormGet" />
                    <input type="hidden" value="_xclick" name="cmd" />
                    <input type="hidden" name="amount" value="80" />

                    <script>toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000})</script>


                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="Your username..." required>
                    </div>

                    <div class="form-group">
                        <label for="prices">Amount</label>
                        <select class="form-control" name="amount" id="prices">
                            <option selected disabled>Select Price and Amount</option>
                            <option value="1">200 Coins - 10€</option>
                            <option value="2">400 Coins - 20€</option>
                            <option value="3">400 Coins - 30€</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-sm btn-primary" type="submit">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Content./ -->

    <!-- \.Footer -->
    <footer>
        <div class="container">
            <div class="col-md-12 text-center">
                Copyright @ <?= date('Y') ?> LESOFT. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- Content./ -->

</body>

<!-- Vendors -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Script -->
<script src="assets/js/app.js"></script>

</html>