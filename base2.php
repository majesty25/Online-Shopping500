<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src='fontawesome-free-5.13.0-web/js/all.js'></script>
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>

<body ng-app="">
    <header>
        <?php echo "<div style='float:left'>";
        include("sidenav.html");
        echo "</div>"; ?>
        <?php include("search.html")  ?>


        <?php echo ("<i style='
         font-size:24px;
         color:orange;
         margin-top: 30px;
         margin-left: 10%;
         ' class='fas fa-shopping-cart'></i>"); ?>
        <?php include("login.html"); ?>
        <?php include("signup.html"); ?>




    </header>

    <br><br><br>
    <br>

    <?php include("sidebar.html"); 
     include("itemset1.html"); 
     include("itemset2.html"); 
    
            echo " <div class='subdiv1'>";
            include("u.html");
            echo "</div>";
            
     include("itemset3.html");
     include("itemset1.html");
     include("itemset2.html");
     include("itemset3.html");
     include("itemset1.html");
    include("itemset2.html"); 
    include("itemset1.html"); 
    include("snackbar.html"); ?><br><br><br>
    <?php
    echo "<div style='float:right'>";
    include("pagination.html");
    echo "</div>"; ?><br><br><br><br>




    <footer>
        <div id="footerdiv1">The machine language instruction that was previously shown is an example of only one
            instruction. It takes a lot more than one instruction, however, for the computer to do
            anything meaningful. Because the operations that a CPU knows how to perform are so
            basic in nature, a meaningful task can be accomplished only if the CPU performs many
            operations.</div>
        <div id="footerdiv2">The machine language instruction that was previously shown is an example of only one
            instruction. It takes a lot more than one instruction, however, for the computer to do
            anything meaningful. Because the operations that a CPU knows how to perform are so
            basic in nature, a meaningful task can be accomplished only if the CPU performs many
            operations.</div>
        <div id="footerdiv3">The machine language instruction that was previously shown is an example of only one
            instruction. It takes a lot more than one instruction, however, for the computer to do
            anything meaningful. Because the operations that a CPU knows how to perform are so
            basic in nature, a meaningful task can be accomplished only if the CPU performs many
            operations.</div>
    </footer>
</body>

</html>