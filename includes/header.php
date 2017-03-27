<?php include("admin/functions/init.php"); ?>

<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php if (logged_in()){ redirect("admin/index.php"); } ?>

<!-----HEADER------->
<!DOCTYPE html>

<html>
<head>
    <!-----meta tags------->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="urf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kwiqpick HR</title>

    <link href="css/bootstrap.min.css" rel="stylesheet"><!-----bootstrap css------->
    <link href="css/styles.css" rel="stylesheet"><!-----custom css------->

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head><!-----end head------->

<body>