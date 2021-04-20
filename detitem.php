<!DOCTYPE html>
<html lang="en" ng-app="">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
    <style>
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

        #div1:hover(#BTN) {
            display: none;
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
            width: auto;
            height: auto;
            border: 3px;
            border-color: silver;
            margin-left:7%;
            margin-top: 0px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            display: inline-block;
            margin-right: 7%;
            margin-bottom: 0px;
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

            #form {
                margin-left: 0%;
            }

            #main {
                display: block;
            }

        }

        @media screen and (max-width: 360px; ) {
            .subdiv {
                width: auto;
            }
        }


        #BTn {
            width: auto;
            color: rgb(250, 250, 253);
            background-color: orange;
            border: none;
            font-size: medium;
            height: auto;
            cursor: pointer;
            font-weight: 50;
            border-radius: 4px;
            margin-bottom: 20px;
            padding: 15px;
        }

        #view {
            < !-- float: left;
            -->font-size: 40px;
            color: salmon;
            margin-left: -10px;
            border-radius: 20px;
        }

        #old {
            margin-left: 5%;
            text-decoration: line-through;
            color: grey;
        }

        #old1 {
            margin-left: 3%;
            /* color: red; */
        }
        #description{
            font-family: calibri,Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: small;
            color: brown;
            padding-bottom: 20px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script></script>
</head>

<body ng-app="">

    <div class="subdiv1it">
        <div class="head2">MAJESTY</div>
        <div id="div1it">
            <img src="font/lap5.jpg" width="63%" height="100%" align='right'
                style="border-radius: 30px; margin-left: -10">
            <br><br><b>
                <h1 style="color: orange;"> The New Hp Laptop </h1>
            </b>
            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations
            The most powerful calculator that performs all sort of scientific calculations...
            <br><br>

            <!-- <a id="view" href="#">view details</a><br><br> -->
            <font id="old1" size="1" face="candara">20% off</font><br><br><br>
            <font size="4" color="black" face="candara"><b>GH&#8373;676.00</b></font>
            <font id="old" size="4" color="black" face="candara"><b>GH&#8373;676.00</b></font>
            <br><br>

            <button onclick="myFunction()" id="BTn" type="submit">ADD TO CART</button>
            <div id="description">
             <h3>Hp Probook</h3>
             PROCESSOR: Intel Core i7 8th Gen <br>
             RAM: 16GB DDR4 <br>
             HDD: 1T with 256gb M.2 SSD <br>
             DISPLAY: 15.6 HD Intel Graphics <br>
             Type-C port <br>
             Camera <br>
             Bluetooth
            </div>
            <hr>
             <a style="color: orange;" href="base.php"> View more</a>
            <?php include('detitemset1.html'); ?>
            
        </div>
    </div>
</body>

</html>