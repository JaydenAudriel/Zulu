<?php
//Check database connection
$database = @new mysqli($_POST['db_host'], $_POST['db_user'], $_POST['db_password'], 'account', $_POST['db_port']);
if ($database->connect_errno) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?check=error');
    die();
}

//Create database credentials
$credentials = '
        <?php
        $db = new mysqli("' . $_POST['db_host'] . '", "' . $_POST['db_user'] . '", "' . $_POST['db_password'] . '", "account", "' . $_POST['db_port'] . '");
        if(!$db){
            require_once "views/error.template.php";
            die();
            }
        ?>
        ';

//Create database config file
$fp = fopen('../config/database.php', 'wb');
fwrite($fp, $credentials);
fclose($fp);
chmod('../config/database.php', 0666);

//Create PayPpal IPN Table
$query = "DROP TABLE IF EXISTS paypal_ipn;";
$query .= "
        CREATE TABLE paypal_ipn(
            id int(11) NOT NULL AUTO_INCREMENT,
            item_name varchar(255) DEFAULT NULL,
            payer_id varchar(255) DEFAULT NULL,
            payer_email varchar(255) DEFAULT NULL,
            amount varchar(255) DEFAULT NULL,
            login varchar(255) DEFAULT NULL,
            txn_id varchar(255) DEFAULT NULL,
            created_at datetime DEFAULT NULL,
            PRIMARY KEY (`id`)
        );";
$database->multi_query($query);
$database->close();

//Remove installation Files after success
$files = glob(__DIR__ . '/*');
foreach ($files as $file) {
    unlink($file);
}

//Redirect after finish
header('location: ../index.php?install=success');
die();

?>