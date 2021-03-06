<!DOCTYPE html>
<html lang='en' ng-app=''>

<head>

    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script src='item.js'></script>
    <title>Item</title>
    <style>
        #container {
            width: 100%;
            background-color: blueviolet;
            height: 40px;
        }

        #div1 {
            float: left;
            max-width: 34%;
            /* padding: 0px; */
            height: auto;
            /* margin-right: 10px;
            margin-left: 25px; */
            margin-top: 10px;
            /* padding-bottom: 40px; */
        }

        #div1:hover {
            box-shadow: 0 8px 16px rgba(177, 174, 196, 0.8), 0 6px 5px rgb(184, 176, 206);
            margin-left: 21px;
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
            max-width: 34%;
            height: auto;
            /* margin-right: 10px;
            margin-left: 25px; */
            margin-top: 10px;
            /* padding-bottom: 40px; */
        }

        #div3 {
            float: left;
            max-width: 34%;
            height: auto;
            /* margin-right: 10px;
            margin-left: 25px; */
            margin-top: 10px;
            /* padding-bottom: 40px; */
        }

        #div4 {
            float: left;
            max-width: 34%;
            height: auto;
            /* margin-right: 10px;
            margin-left: 25px; */
            margin-top: 10px;
            /* padding-bottom: 40px; */
        }

        #div5 {
            float: left;
            max-width: 34%;
            height: auto;
            /* margin-right: 10px;
            margin-left: 25px; */
            margin-top: 10px;
            /* padding-bottom: 40px; */
        }

        #div6 {
            float: left;
            max-width: 34%;
            height: auto;
            /* margin-right: 10px;
            margin-left: 25px; */
            margin-top: 10px;
            /* padding-bottom: 40px; */
        }

        #div7 {
            /* float: left; */
            width: auto;
            height: auto;
            /* margin-right: 10px;
            margin-left: 25px; */
            margin-top: 10px;
        }

        .head {
            width: 100%;
            height: 17%;
            background-color: rgb(226, 153, 43);
            padding-top: 10px;
            padding-bottom: 10px;



        }

        .ima {
            width: 100%;
            max-width: 148px;
            /* height: auto; */
            max-height: 130px;
        }

        .subdiv1 {
            width: auto;
            height: auto;
            border: 3px;
            border-color: silver;
            margin-left: 18%;
            margin-top: 10px;
            background-color: rgb(255, 255, 255, 1);
            border-radius: 10px;
            display: box;
            margin-right: 0%;
            margin-bottom: 0px;
            font-size: x-small;
            /* box-shadow: 0px 0px 6px rgba(190, 184, 243), 0 4px 10px rgba(188, 169, 241); */
            padding-bottom: 10px;
            /* padding-left: 1%; */
        }

        @media screen and (max-width: 800px) {
            .subdiv1 {
                width: 100%;
                height: auto;
                border: 3px;
                border-color: silver;
                margin-left: 0px;
                margin-top: 30px;
                background-color: rgb(255, 255, 255);
                border-radius: 0px;
                display: inline-block;
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
            .subdiv1 {}
        }


        #BTN {
            display: none;
            width: 100%;
            color: rgb(250, 250, 253);
            background-color: orange;
            border: none;
            font-size: small;
            height: 30px;
            cursor: pointer;
            font-weight: 50;
            border-radius: 4px;
            padding: 4px;
            float: right;
            margin-bottom: 0px;
        }


        #a {
            margin: 0px;
            padding: 0px;
            background-color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        #a:focus {
            border: solid white 0px;
        }

        img {
            border-radius: 10px;
        }

        #old {
            margin-left: 0%;
            text-decoration: line-through;
            color: grey;
            font-size: x-small;
            /* float: left; */
            /* background-color: slategray; */
        }

        #percentageOff {
            float: right;
            margin-right: 10px;
            background-color: rgb(226, 153, 43, .3);
            /* position: sticky; */
            padding-left: 3px;
            padding-right: 3px;
            color: orangered;
            border-radius: 3px;
            /* width: 50px; */
        }

        #name {
            font-size: small;
        }
    </style>
    <link rel='stylesheet' href='fontawesome-free-5.13.0-web/css/all.css'>
    <script>
        function item(id, name, newPrice, percent, starf, star, rate, starfNum, starNum, image) {
            this.name = name;
            this.id = id;
            this.image = image;
            this.newPrice = newPrice;
            this.starf = starf;
            this.starfNum = starfNum;
            this.star = star;
            this.starNum = starNum;
            this.rate = rate;
            this.display_starf = display_starf;
            this.display_star = display_star;
            this.display_rate = display_rate;
            this.displayName = displayName;
            this.display_newPrice = display_newPrice;
            this.display_oldPrice = display_oldPrice;
            this.percent = percent;
            this.display_percent = display_percent;
            this.display_id = display_id;
            this.display_image = display_image;
        }

        function displayName() {
            document.write(this.name);
        }

        function display_newPrice() {
            document.write(this.newPrice);
        }

        function display_oldPrice() {
            let old_price = this.newPrice + ((this.percent / 100) * this.newPrice);
            let old_price1 = Math.floor(old_price);
            document.write(old_price1);
        }

        function display_percent() {
            document.write(this.percent);
        }

        function display_image() {
            document.write(`<img src='${this.image}' class='ima'> `);
        }

        function display_id() {
            document.write(`<input type="hidden" name="${this.id}" value="">`);
        }

        function display_starf() {
            if (this.starfNum > 0) {
                for (var i = 0; i < this.starfNum; i++) {
                    document.write(this.starf);
                }
            } else {
                document.write("");
            }

        }

        function display_star() {
            if (this.starNum > 0) {
                for (var i = 0; i < this.starNum; i++) {
                    document.write(this.star);
                }
            } else {
                document.write("");
            }
        }

        function display_rate() {
            document.write(this.rate);
        }





        item1 = new item('0001', 'Phone', 859, 6, '&starf;', '&star;', 13, 4, 1, 'font/lap5.jpg');
        item2 = new item('0002', 'Phone', 1477, 93, '&starf;', '&star;', 17, 3, 2, 'font/lap2.jpg');
        item3 = new item('0003', 'Phone', 299, 10, '&starf;', '&star;', 51, 4, 1, 'font/shoe1.jpg');
        item4 = new item('0004', 'Phone', 299, 10, '&starf;', '&star;', 93, 5, 0, 'font/shoe2.jpg');
        item5 = new item('0005', 'Phone', 299, 10, '&starf;', '&star;', 1, 0, 5, 'font/shoe3.jpg');
        item6 = new item('0006', 'Phone', 299, 10, '&starf;', '&star;', 6, 1, 4, 'font/top1.jpg');
    </script>

    <script>
        // btn1 = document.getElementById("BTN");

        // function showBTN() {
        //     btn1.style.display = "flex";

        //     btn1.style.background = 'orange';
        // }

        // function hideBTN() {
        //     btn1.style.display = "none";
        //     // btn1.style.background = 'white'
        // }



        function Count() {
            count_num = 0;
            count_num++;
            counter = document.getElementById("count");
            counter.innerHTML = "count_num";

        }
    </script>

</head>

<body>
    <!-- <div id='new'> -->
    <div class='subdiv1'>
        <!-- <div class='head'>MAJESTY</div> -->
        <div id='div1' onmouseover="showBTN()" onmouseout="hideBTN()">
            <form action="details.php" name='item1' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item1.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item1.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item1.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="1" color="black" face="calibri">GH&#8373; <script>
                        item1.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item1.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item1.display_starf();
                        item1.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item1.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item1.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' onclick="Count()" type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div2'>
            <form action="details.php" name='item1' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item2.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item2.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item2.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item2.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item2.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item2.display_starf();
                        item2.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item2.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item2.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div3'>
            <form action="details.php" name='item1' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item3.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item1.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item3.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item3.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item3.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item3.display_starf();
                        item3.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item3.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item3.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div4'>
            <form action="details.php" name='item4' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item4.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item4.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item4.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item4.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item4.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item4.display_starf();
                        item4.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item4.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item4.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div5'>
            <form action="details.php" name='item5' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item5.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item5.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item5.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item5.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item5.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item5.display_starf();
                        item5.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item5.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item5.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div6'>
            <form action="details.php" name='item6' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item6.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item6.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item6.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item6.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item6.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item6.display_starf();
                        item6.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item6.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item6.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div1' onmouseover="showBTN()" onmouseout="hideBTN()">
            <form action="details.php" name='item1' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item1.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item1.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item1.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="1" color="black" face="calibri">GH&#8373; <script>
                        item1.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item1.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item1.display_starf();
                        item1.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item1.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item1.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' onclick="Count()" type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div2'>
            <form action="details.php" name='item1' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item2.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item2.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item2.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item2.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item2.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item2.display_starf();
                        item2.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item2.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item2.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div3'>
            <form action="details.php" name='item1' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item3.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item1.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item3.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item3.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item3.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item3.display_starf();
                        item3.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item3.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item3.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div4'>
            <form action="details.php" name='item4' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item4.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item4.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item4.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item4.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item4.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item4.display_starf();
                        item4.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item4.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item4.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div5'>
            <form action="details.php" name='item5' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item5.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item5.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item5.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item5.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item5.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item5.display_starf();
                        item5.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item5.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item5.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

        <div id='div6'>
            <form action="details.php" name='item6' method='POST'>
                <button id='a' type="submit">
                    <script>
                        item6.display_image();
                    </script>
                </button>
                <br>
                <script>
                    item6.displayName();
                </script><br>
                <font size='2' color='black' face='calibri'><b>GH&#8373;

                        <script>
                            item6.display_newPrice();
                        </script>
                    </b><br>
                </font>
                <font id="old" size="" color="black" face="calibri">GH&#8373; <script>
                        item6.display_oldPrice();
                    </script>
                </font>
                <font size='1'>
                    <div id="percentageOff">
                        -<script>
                            item6.display_percent();
                        </script>%
                    </div>
                </font><br>
                <font size='1' color='orange'>
                    <script>
                        item6.display_starf();
                        item6.display_star();
                    </script>
                </font>
                <font color='gray' size='1'>(<script>
                        item6.display_rate()
                    </script>)
                </font> <br>
                <script>
                    item6.display_id()
                </script><br>
                <input id='BTN' onclick='myFunction()' type="button" value="ADD TO CART">
                <!-- <button onclick='myFunction()' id='BTN'>ADD TO CART</button> -->
            </form>
        </div>

    </div>

    <script>
        function item() {
            document.getElementById('new').innerHTML = '<?php include('detail.php'); ?>';
        }
    </script>
    </div>
</body>

</html>