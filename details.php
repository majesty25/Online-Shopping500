<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src='fontawesome-free-5.13.0-web/js/all.js'></script>
    <script src="item.js"></script>
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>

        body {
            background-color: white;
            /* background-color: rgb(90, 6, 150, .1); */
            background-image: none;
        }

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
            margin-left: 11%;
            margin-top: 5px;
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


        header {
            background-color: white;
        }

        .sidenav {
            height: 100%;
            width: 0%;
            position: fixed;
            z-index: 1;
            top: 0px;
            left: 0;
            background-color: rgb(253, 243, 243);
            overflow-x: hidden;
            transition: 0.2s;
            padding-top: 30px;
            font-size: 20px;
          box-shadow: 0px 0px 6px rgba(190, 184, 243), 0 4px 10px rgba(188, 169, 241);
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: rgb(207, 28, 28);
        }

        #main {
            transition: 0.1s;
            padding: 16px;
            display: none;
            
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 17px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        #container {
            width: 100%;
            background-color: blueviolet;
            height: 40px;
        }

        #div1it {
            float: left;
            width: auto;
            height: auto;
            margin-right: 14px;
            margin-left: 20px;
        }

        #div1it:hover {
            < !-- box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            -->margin-left: 21px;
        }

        #div1:hover {
            #BTn {
                display: none;
            }
        }

        #div2:hover {
            box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            margin-left: 21px;
        }

        #div3:hover {
            box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            margin-left: 21px;
        }

        #div4:hover {
            box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            margin-left: 21px;
        }

        #div5:hover {
            box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            margin-left: 21px;
        }

        #div6:hover {
            box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            margin-left: 21px;
        }

        #div7:hover {
            box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            margin-left: 21px;
        }

        #div2 {
            float: left;
            width: auto;
            height: auto;
            margin-right: 14px;
            margin-left: 20px;
        }

        #div3 {
            float: left;
            width: auto;
            height: auto;
            margin-right: 14px;
            margin-left: 20px;
        }

        #div4 {
            float: left;
            width: auto;
            height: auto;
            margin-right: 14px;
            margin-left: 20px;
        }

        #div5 {
            float: left;
            width: auto;
            height: auto;
            margin-right: 14px;
            margin-left: 20px;
        }

        #div6 {
            float: left;
            width: auto;
            height: auto;
            margin-right: 14px;
            margin-left: 20px;
        }
        }

        #div7 {
            float: left;
            width: auto;
            height: auto;
            margin-right: 14px;
            margin-left: 20px;
        }

        .head2 {
            width: 100%;
            height: 40%;
            background-color: rgb(19, 9, 110, 0.9);
            padding-top: 10px;
            padding-bottom: 20px;
            color: white;
            padding-left: 45%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;



        }

        .subdiv1it {
            float: left;
            width: 56%;
            height: auto;
            border: 3px;
            border-color: silver;
            margin-left: 1%;
            margin-top: 0px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            display: inline-block;
            margin-right: 0%;
            margin-bottom: 0px;
            padding-bottom: 10px;
            /* color: gray; */
            font-family: calibri;
            /* box-shadow: 0 8px 36px rgba(190, 184, 243, 0.8), 0 8px 11px rgba(188, 169, 241, 0.8); */
            /* box-shadow: 0px 0px 6px rgba(190, 184, 243), 0 4px 10px rgba(188, 169, 241); */
        }

        #image-phone {
            display: none;
            margin-left: 2.5%;
        }

        #frame {
            float: inline-start;
            background-color: white;
            width: 56%;
            height: auto;
            z-index: 1;
            margin-left: 2%;
            margin-right: 0px;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 1%;
            font-family: calibri;
            box-shadow: 0px 0px 4px rgba(190, 184, 243), 0 3px 4px rgba(188, 169, 241);
        }

        #multi-images {
            float: right;
            width: 40%;
            height: auto;
            background-color: white;
            margin-top: auto;
            margin-bottom: 0px;
            margin-left: 0px;
            margin-right: 10px;
            padding: 10px 5px 10px 5px;
            box-shadow: 0px 0px 3px rgba(190, 184, 243), 0 1px 2px rgba(188, 169, 241);
            border-radius: 5px;
        }

        #multi-images-ph {
            display: none;
        }

        @media screen and (max-width: 800px) {
            .subdiv1it {
                width: 100%;
                height: auto;
                border: 3px;
                border-color: silver;
                margin-left: 0%;
                margin-top: 30px;
                margin-right: 0px;
                margin-bottom: 0px;
            }

            #multi-images {
                display: none;
            }

            #multi-images-ph {
                display: inline-flex;
                width: auto;
                background-color: white;
                margin: 10px 10px 10px 20px;
                padding: 12px;


            }

            body {
                background-color: rgb(0, 0, 0, .1);
            }

            #form {
                margin-left: 0%;
            }

            #main {
                display: block;
            }

            #BTn {
                margin-left: 20px;
            }

            #image {
                display: none;
            }

            #image-phone {
                display: inline-flex;
                margin-top: 30px;
                margin-right: 2.5%;
            }

            #sidebar1 {
                display: none;
            }

            #frame {
                width: 100%;
                float: none;
                border-radius: 0px;
                margin-bottom: 10px;
                margin-left: 0%;

            }

        }


        @media screen and (max-width: 360px; ) {
            .subdiv {
                width: auto;
            }
        }


        #BTn {
            width: 100%;
            color: rgb(250, 250, 253);
            background-color: rgb(200, 86, 3);
            border: none;
            font-size: medium;
            height: auto;
            cursor: pointer;
            font-weight: 50;
            border-radius: 4px;
            margin-bottom: 20px;
            padding: 10px;
            margin-left: 0px;
            margin-top: 30px;
            z-index: 3;
            box-shadow: 0px 0px 6px rgba(190, 184, 243), 0 4px 10px rgba(188, 169, 241);
        }



        #view {
            color: orangered;
            margin-left: 120px;
            margin-right: 20px;
            margin-top: 0px;
            float: right;
            font-size: large;
        }

        #old {
            margin-left: 0%;
            /* text-decoration: line-through; */
            color: grey;
            /* background-color: slategray; */
            font-size: xx-large;
        }

        #cancelled {
            font-size: large;
            text-decoration: line-through;
            color: gray;
        }

        #old1 {
            margin-left: 3%;
            color: red;
            background-color: rgb(226, 153, 43, .3);
            padding: 3px 15px 3px 10px;
            border-radius: 6px;

        }

        #description {
            font-family: calibri, Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: small;
            color: rgb(0, 0, 0);
            padding-bottom: 20px;
            float: left;


        }

        #image {
            margin-top: 0px;
            margin-right: 10px;
            margin-left: 10px;
            margin-bottom: 30px;
            background-color: rgb(255, 255, 255, 1);
            padding: 16px;
            float: right;
            box-shadow: 0px 0px 3px rgba(190, 184, 243), 0 1px 1px rgba(188, 169, 241);
        }



        .image {
            float: right;
        }

        #sidebar1 {
            float: right;
            width: 10%;
            height: 300px;
            background-color: white;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 6px rgba(190, 184, 243), 0 4px 10px rgba(188, 169, 241);
        }

        #star {
            color: orange;
        }

        #check {
            box-shadow: 0px 0px 6px rgba(190, 184, 243), 0 4px 10px rgba(188, 169, 241);
            padding: 16px;
            z-index: 20;
        }


        .sidenav {
            height: 100%;
            width: 0%;
            position: fixed;
            z-index: 1;
            top: 0px;
            left: 0;
            background-color: rgb(253, 243, 243);
            overflow-x: hidden;
            transition: 0.2s;
            padding-top: 30px;
            font-size: 20px;
            box-shadow: 0px 0px 6px rgba(190, 184, 243), 0 4px 10px rgba(188, 169, 241);
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: rgb(207, 28, 28);
        }

        #main {
            transition: 0.1s;
            padding: 16px;
            display: flex;

        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 17px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>





    <?php

    class item
    {
        var $name;
        var $price;
        var $description;
        var $status;
        var $image;

        function __construct($Name, $Price, $Description, $Status, $Image_main, $Image1, $Image2, $Image3, $Image4)
        {
            $this->name = $Name;
            $this->price = $Price;
            $this->description = $Description;
            $this->status = $Status;
            $this->image_main = $Image_main;
            $this->image1 = $Image1;
            $this->image2 = $Image2;
            $this->image3 = $Image3;
            $this->image4 = $Image4;
        }
    }



    if (isset($_POST['0001'])) {
        $name = '1';
    } elseif (isset($_POST['0002'])) {
        $name = '2';
    } elseif (isset($_POST['0003'])) {
        $name = '3';
    } elseif (isset($_POST['0004'])) {
        $name = '4';
    } elseif (isset($_POST['0005'])) {
        $name = '5';
    } elseif (isset($_POST['0006'])) {
        $name = '6';
    } elseif (isset($_POST['0007'])) {
        $name = '7';
    } elseif (isset($_POST['0008'])) {
        $name = '8';
    } elseif (isset($_POST['0009'])) {
        $name = '9';
    } elseif (isset($_POST['0010'])) {
        $name = '10';
    } elseif (isset($_POST['0011'])) {
        $name = '11';
    } elseif (isset($_POST['0012'])) {
        $name = '12';
    } elseif (isset($_POST['0013'])) {
        $name = '13';
    } elseif (isset($_POST['0014'])) {
        $name = '14';
    } elseif (isset($_POST['0015'])) {
        $name = '15';
    } elseif (isset($_POST['0016'])) {
        $name = '16';
    } elseif (isset($_POST['0017'])) {
        $name = '17';
    } elseif (isset($_POST['0018'])) {
        $name = '18';
    }

    switch ($name) {
        case '1':
            $Item1 = new item(
                'phone',
                785,
                'jkshdkhdiudis',
                'in stock',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '2':
            $Item1 = new item(
                'phone1',
                1785,
                'jkshdkhdiudis',
                'out of stock',
                'font/lap2.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '3':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shoe1.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '4':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/shoe2.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '5':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/shoe3.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '6':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/top1.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '7':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/calcus.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '8':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/laptop1.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
        case '9':
            break;
            // $Item1 = new item('phone3', 985, 'jkshdkhdiudis', 'in stock', 'font/jeans.jpg', 'font/lap5.jpg', 'font/lap2.jpg', 'font/lap4.jpg', 'font/lap3.jpg');
            // break;
        case '10':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/covers.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '11':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shoe2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '12':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/laptop2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '13':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/lap1.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '14':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shu1.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '15':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/lap4.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '16':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shu2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '17':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/new2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '18':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/bag.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
    }

    ?>
    <!-- <script>
        // Item1 = "<?php echo ($name); ?>";
        Item1 = document.item1.name.value;
        console.log(Item1);


        function item(name, price, status) {
            this.name = name;
            this.price = price;
            this.ststus = status;
            this.displayName = displayName;
            this.displayPrice = displayPrice;
        }

        function displayName() {
            document.writez(this.name)
        }

        function displayPrice() {
            document.write(this.price)
        }
    </script> -->


</head>

<body background='red'>
    <header>



        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul style="color: orange; margin-top: -20;">
                <h4 style="color: rgb(207, 28, 28); margin-bottom: -10;">CATEGORIES</h4>
                <li><a style="color: orange; font-size: 17px" href="#"><i class='fas fa-tshirt'></i> Fassion </a></li>
                <li> <a style="color: orange; font-size: 17px" href="#"><i class='fas fa-desktop'></i> Computers</a></li>
                <li> <a style="color: orange; font-size: 17px" href="#"><i class='fas fa-mobile-alt'></i> Phone</a></li>
                <li> <a style="color: orange; font-size: 17px" href="#"><i class='fas fa-bolt'></i> Electronics</a></li>
                <li> <a style="color: orange; font-size: 17px" href="#"><i class='fas fa-utensils'></i> Utensils</a></li>
                <!-- <li> <a style="color: orange; font-size: 17px" href="itemset2.php"><i class='fas fa-eye'></i> View carts</a></li> -->
            </ul>
            <hr color="orange" style="width: 80%; height: 3px">

            <ul style="color: orange;">
                <h4 style="color: rgb(207, 28, 28); margin-bottom: -10;">ACTIVITIES</h4>
                <li><a style="color: orange; font-size: 17px" href="base.php"> <i class='fas fa-house-user'></i> Home</a></li>
                <li> <a style="color: orange; font-size: 17px" href="itemset2.php"><i class='fas fa-shopping-cart'></i> View carts</a></li>
                <li> <a style='font-size:17px; color: orange' href="#"><i class='fas fa-envelope'></i> Contact us</li></a>
                <li> <a style='font-size:17px; color: orange' href="#"><i class='fas fa-comment'></i> Live chat</li></a>
                <li> <a style='font-size:17px; color: orange' href="#"><i class='fab fa-facebook-f'></i> Follow us</li></a>
                <li> <a style='font-size:17px; color: orange' href="#"><i class='far fa-comment-alt'></i> Leave comments</li></a>
            </ul>
        </div>

        <div id="main">

            <span style="font-size:28px;cursor:pointer; color: rgb(19, 13, 13);
        left: 5px; top: 32px; position: absolute" onclick="openNav()">&#9776;</span>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "80%";
                document.getElementById("main").style.marginLeft = "0px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>





        
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
         margin-top: 5px;
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





    </header>

    <br><br><br>
    <br>




    <div><img id="image-phone" src="<?php echo $Item1->image_main; ?>" width="95%" height="100%" style="border-radius: 1%;"></div>
    <div><img id="image" src="<?php echo $Item1->image_main; ?>" width="40%" height="590px" style="border-radius: 9px"></div>

    <div id="multi-images-ph">
        <img src="<?php echo $Item1->image1; ?>" width="60" height="60" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image_main; ?>" width="60" height="60" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image3; ?>" width="60" height="60" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image2; ?>" width="60" height="60" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image4; ?>" width="60" height="60" style="border-radius: 1%;">
    </div>

    <div id="frame">
        <h3 style="color: orangered;"> The New Hp Laptop </h3>
        The most powerful calculator that performs all sort of scientific calculations
        The most powerful calculator that performs all sort of scientific calculations
        The most powerful calculator that performs all sort of scientific calculations
        The most powerful calculator that performs all sort of scientific calculations
        The most powerful calculator that performs all sort of scientific calculations...

    </div>


    <script>
      function changePic(){
          
      }
    </script>



    <div class="subdiv1it">

        <div id="div1it">

            <b>
                <h3 style="color: orangered;"> Product's Details </h3>
            </b>

            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations...


            <br><br>

            <hr color='red' style="height: 3px;" />


            <!-- <a id="view" href="#">view details</a><br><br> -->





            <div id="description"><br>

                <h1 style="color: orangeredred;"><?php echo $Item1->name; ?></h1>
                PROCESSOR: Intel Core i7 8th Gen <br>
                RAM: 16GB DDR4 <br>
                HDD: 1T with 256gb M.2 SSD <br>
                DISPLAY: 15.6 HD Intel Graphics <br>
                Type-C port <br>
                Camera <br>
                Bluetooth
            </div>

            <div id="check" style="float: right; ">
                <font size="6" color="black" face="calibri"><b>GH&#8373; <?php echo $Item1->price; ?></b></font>
                <i style='font-size: 30px; color: orange; float: right; margin-right: 10%;' class='fa fa-heart'></i>
                <br>
                <font id='cancelled' color="black" face="calibri">GH&#8373; 676</font>

                <font id="old1" size="2" color="black" face="calibri">-20%</font><a id="view" href="base.php"> Shop more</a><br><br>
                <div id="star">&starf;&starf;&starf;&starf;&starf;</div>
                <br>
                status: <?php echo $Item1->status; ?>

                <br><br>
                <button onclick="myFunction()" id="BTn" type="submit"> <i style='font-size:20px; color: white; float: left;' class='fas fa-cart-plus'></i> ADD TO CART</button>




                <!-- <i style='font-size:24px' class='fas fa-add_shopping_cart'></i> -->
            </div>
        </div>
    </div>


    <div id="multi-images">
        <img src="<?php echo $Item1->image1; ?>" width="90" height="90px" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image_main; ?>" width="90" height="90px" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image3; ?>" width="90" height="90px" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image2; ?>" width="90" height="90px" style="border-radius: 1%;">
        <img src="<?php echo $Item1->image4; ?>" width="90" height="90px" style="border-radius: 1%;">

    </div>




    <!-- <div id="sidebar1">hjgsjgjgsauyguygduy</div> -->

    <!-- <div id="sidebar1">hjgsjgjgsauyguygduygsakuduy</div> -->
    <?php
    echo "<div style='margin-right: 0px;'>";
    // include('itemsetI.html');
    ?>
    <!-- <div id="sidebar1">hjgsjgjgsauyguygduy</div>
    
    <div id="sidebar1">hjgsjgjgsauyguygduy</div>
     -->
    <?php
    // echo "</div>";
    ?>
    <br><br><br>


    <!-- <footer>
        <div id="">The machine language instruction that was previously shown is an example of only one
            instruction. It takes a lot more than one instruction, however, for the computer to do
            anything meaningful. Because the operations that a CPU knows how to perform are so
            basic in nature, a meaningful task can be accomplished only if the CPU performs many
            operations.</div>
        <hr style="width: 80%; border: 1px solid; background-color: red;">
        <div id="">The machine language instruction that was previously shown is an example of only one
            instruction. It takes a lot more than one instruction, however, for the computer to do
            anything meaningful. Because the operations that a CPU knows how to perform are so
            basic in nature, a meaningful task can be accomplished only if the CPU performs many
            operations.</div>

    </footer> -->
</body>

</html>