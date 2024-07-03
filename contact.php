<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $fp = fopen("message.txt", "a+");
            fputs($fp, "$username|$email|$message\n");
            fclose($fp);
        }
    ?>
    <div class="php">
        <h1>Terimakasih Telah Mengirimkan Pesan!</h1>
        <h3><a href="index.html">Klik Untuk Kembali</a></h3>
    </div>
</body>
</html>