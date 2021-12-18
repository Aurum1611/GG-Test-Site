<?php

/*

* File: index.php
* Author: Neeyat Lotlikar
* Date: 17/12/2021

*/

// Database connection code and any preprocessing will come here.

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Coding School - Landing Page</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="public/styles/style.css">
</head>

<body>
    <?php

	include "partials/covid-message.php";

	include "partials/header.php";

	include "partials/experience-card.php";

	include "partials/parents-slider.php";

	include "partials/classroom-experience.php";

	include "partials/footer.php";
	
	?>
</body>

</html>