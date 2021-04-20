<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src='fontawesome-free-5.13.0-web/js/all.js'></script>
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2">
    <title>Document</title>



</head>

<body ng-app="">
    <header>
        <?php echo "<div style='float:left'>";
        include("sidenav.html");
        echo "</div>"; ?>
        <?php include("search.html")  ?>




        <?php include("signup2.html"); ?>
        <?php include("userinfo.php"); ?>




    </header>

    <br><br><br>
    <br>

    <?php include("sidebar.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset2.html"); ?>
    <!-- <?php
            echo " <div class='subdiv1'>";
            include("u.html");
            echo "</div>"
            ?> -->
    <?php include("itemset3.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset2.html"); ?>
    <?php include("itemset3.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("itemset2.html"); ?>
    <?php include("itemset1.html"); ?>
    <?php include("snackbar.html"); ?><br><br><br>
    <?php
    echo "<div style='float:right'>";
    include("pagination.html");
    echo "</div>"; ?><br><br><br><br>




    <footer style="color: white; padding: 20px">
        The machine language instruction that was previously shown is an example of only one
        instruction. It takes a lot more than one instruction, however, for the computer to do
        anything meaningful. Because the operations that a CPU knows how to perform are so
        basic in nature, a meaningful task can be accomplished only if the CPU performs many
        operations.The machine language instruction that was previously shown is an example of only one
        instruction. It takes a lot more than one instruction, however, for the computer to do
        anything meaningful. Because the operations that a CPU knows how to perform are so
        basic in nature, a meaningful task can be accomplished only if the CPU performs many
        operations.
        <hr style="width: 80%; border: 1px solid; background-color: red;">
        The machine language instruction that was previously shown is an example of only one
        instruction. It takes a lot more than one instruction, however, for the computer to do
        anything meaningful. Because the operations that a CPU knows how to perform are so
        basic in nature, a meaningful task can be accomplished only if the CPU performs many
        operations.
        <hr style="width: 80%;">
        The machine language instruction that was previously shown is an example of only one
        instruction. It takes a lot more than one instruction, however, for the computer to do
        anything meaningful. Because the operations that a CPU knows how to perform are so
        basic in nature, a meaningful task can be accomplished only if the CPU performs many
        operations.

    </footer>
</body>

</html>