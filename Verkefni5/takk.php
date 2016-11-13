<html>
<head>
	<title>Takk</title>
            <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="verkefni5.css">
        <link rel="stylesheet" href="normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <title>Verkefni 5</title>
</head>
<body>
<?php
    $last = $_POST['lastname'];
    $first = $_POST['firstname'];
    $mail = $_POST['email-adress'];
?>
    <div class="takktakk">
        <h1>Takk fyrir að skrá þig <?php echo $first . " " . $last; ?>.</h1>
        <h2>Við munum hafa samband í <?php echo $mail; ?> ef þú vinnur.</h2>
        <a href="index.html">Fara aftur heim</a>
    </div>
</body>
</html>