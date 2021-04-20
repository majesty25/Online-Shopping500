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


    <style>
        #counter {
            color: blue;
            float: left;
            background-color: white;
            margin: 3px;
            border-radius: 10px;
            position: fixed;
            left: 40%;
        }

        #searchBar {
            width: 38%;
            height: 30px;
            margin-left: 2%;
            margin-top: 35px;
            font-size: 20px;
            border: 1px solid gray;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-radius: 3px;

        }

        #searchBTN {
            width: 38px;
            height: 30px;
            margin-left: -4px;
            font-size: 21px;
            border: none;
            border-radius: 3px;
            color: gray;
            background-color: orange;
            /* margin-top: 30px; */
        }
    </style>
    <script>
        count_num = 0;

        function Count() {
            count_num++;
            counter = document.getElementById("count");
            counter.innerHTML = count_num;

        }
    </script>


</head>

<body id="new">
    <header>

        <?php

        // echo "<div '>";
        // echo "<img style='margin-top: 5px' src='font/IMG_20201102_073640_453.jpg' width='170' height='60' align='left'";
        // echo "";
        // echo "</div>";


        ?>
        <?php echo "<div style='float:left'>";
        include("sidenav.html");
        echo "</div>"; ?>
        <?php
        echo "<div style='margin-left: 110px'>";
        // include("search.html");
        echo "</div>";


        ?>
        <!-- &#xe854; -->

        

        <input type="search" name="search" id="searchBar">
        <button type="submit" id="searchBTN"><i class='fas fa-search'></i></button>

        <i style="position: absolute; right: 30%; top: 60%;
        color: black;" class='far fa-user'></i>

        


        <?php echo ("<i style='
        color: black;
         font-size:26px;
         float:right;
         color: rgb(80,80,80);
         margin-top: 38px;
         margin-right: 5%;
         ' class='fas fa-shopping-cart'></i>");

        // include("counter.html");

        ?>

        <div id="count" style="float: right; right: 4%; top: 43%;
            position: absolute; font-size: 19px;
            color: red; font-weight: bold;
            background-color: rgb(255, 255, 255, 0.1); border-radius: 20px;
            padding: 1px">6</div>



        <?php include("login.html"); ?>
        <!-- <i class='fas fa-search'> -->

        <?php class item
        {
            var $name;
            var $price;
            var $description;
            function __construct($Name, $Price, $Description)
            {
                $this->name = $Name;
                $this->price = $Price;
                $this->description = $Description;
            }
        } ?>




    </header>

    <br><br><br>
    <br>

    <?php include("sidebar.html"); ?>
    <?php include("oneitem.html"); ?>
    <?php include("itemset1.php"); ?>
    <?php include("image.html"); ?>
    <?php include("itemset1.php"); ?>
    <?php include("oneitem.html"); ?>
    <?php include("itemset1.php"); ?>
    <?php include("itemset2.html"); ?>

    <?php

    // include("u.html");
    echo "</div>"
    ?>

    <?php include("itemset3.html"); ?>
    <?php include("itemset1.php"); ?>
    <?php include("itemset2.html"); ?>
    <?php include("image.html"); ?>
    <?php include("itemset3.html"); ?>
    <?php include("itemset1.php"); ?>
    <?php include("itemset2.html"); ?>
    <?php include("itemset1.php"); ?>
    <?php include("snackbar.html"); ?><br><br><br>
    <?php
    echo "<div style='float:right'>";
    include("pagination.html");
    echo "</div>"; ?><br><br><br><br>




    <footer style="color: white">
        The machine language instruction that was previously shown is an example of only one
        instruction. It takes a lot more than one instruction, however, for the computer to do
        anything meaningful. Because the operations that a CPU knows how to perform are so
        basic in nature, a meaningful task can be accomplished only if the CPU performs many
        operations.The machine language instruction that was previously shown is an example of only one
        instruction.
        <!-- &#8383; -->
        <!-- <i class="fab fa-bitcoin"></i> -->
        <hr style="width: 80%; border: 1px solid; background-color: red;">
        The machine language instruction that was previously shown is an example of only one
        instruction. It takes a lot more than one instruction, however, for the computer to do
        anything meaningful. Because the operations that a CPU knows how to perform are so
        basic in nature, a meaningful task can be accomplished only if the CPU performs many

        operations.

        <br><br>
        Copyright &copy; 2020. All right reserved.


    </footer>
</body>

</html>