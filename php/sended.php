<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
</head>
<body>
    <style>
        h1 {
            font-family: "Droid Sans", "Segoe UI", "Arial", sans-serif;
        }
    </style>
    <h1>Mail enviado correctamente</h1>
    <p>Será redirigido a la página inicial, si no es redirigido 
        <meta http-equiv="refresh" content="5; url=../index.html">
        <a href="http://www.torchmice.000webhost.com">clickee aquí:</a>
    </p>
    <?php
        include("redirect.php");
    ?>
</body>
</html>