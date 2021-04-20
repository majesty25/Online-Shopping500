<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="media.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>

<body ng-app="">
    <header>
        <?php echo "<div style='float:left'>";
        include("sidenav.html");
        echo "</div>"; ?>
        <?php include("search.html")  
        
        ?>

        <?php include("login.html"); ?>
        <?php include("signup.html"); ?>




    </header>

    <br><br><br>

    <?php include("sidebar.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("snackbar.html"); ?><br><br><br>
    <?php
    echo "<div style='float:right'>";
    include("pagination.html");
    echo "</div>"; ?><br><br><br><br>




    <footer></footer>
</body>

</html>