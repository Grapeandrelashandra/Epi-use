<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    if(!isset($_SESSION['UserID'])){

    ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

        <title>Hierachy</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="assets/css/main.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="assets/js/hover.zoom.js"></script>
        <script src="assets/js/hover.zoom.conf.js"></script>
        <link rel="stylesheet" href="assets/css/login.css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Static navbar -->
    <h1>Epi Use</h1>
    </div>
    <div class="login-block">
            <form action="assets/php/login.php" method="post">
                <label for="username" style="color:#49c628a6">USERNAME :</label>
                <input type="email" value=" " placeholder="Enter email" id="email" name="email" required>
                <label for="password " style="color:#49c628a6">PASSWORD :</label>
                <input type="password" value="" placeholder="Password" id="password" name="password" required>
                <input type="submit" value="submit" id="submit">
            </form>
    </div>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js "></script>
</body>
<?php
    }else{
        header("location: index.php");
    }
?>

</html>