<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crested Butte</title>
    <link rel="shortcut icon" href="img/favicon.png">

<!--    <meta http-equiv="refresh" content="5">-->

    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="jquery.inputmask-3.x/jquery.maskedinput.min.js"></script>

    <link rel="stylesheet" href="css/base.css">
    <script src="js/main.js"></script>
</head>

<body>

<header>
    <div class="header-top">
        <ul class="seasons">
            <li class="summer">
                <a href="#summer">summer</a>
            </li>
            <li class="winter">
                <a href="#winter">winter</a>
            </li>
        </ul>
        <ul class="header-info">
            <li class="estate">
                <a href="#estate">real estate</a>
            </li>
            <li class="bike">
                <a href="#bike">evolution bike park</a>
            </li>
            <li class="phone">
                <p>(877) 547-5143</p>
            </li>
        </ul>
    </div>

    <div class="header-bottom">
        <div class="wrapper">
            <a href="#home" class="logo">
                <span class="site-name">Cracker man</span>
                <img src="img/logo.jpeg" width="567" height="566" alt="logo">
            </a>

            <div class="main-menu">
                <ul class="menu">
                    <li><a href="#1">Enterprise - software</a></li>
                    <li><a href="#2">Planning</a></li>
                    <li><a href="#3">Apps</a></li>
                    <li><a href="#4">Support</a></li>
                    <li><a href="#5">Shop</a></li>
                </ul>
            </div>

            <div class="form">
                <form action="index.php?action=search" method="post" class="header-form" id="header-form">
                    <input type="search" class="header-search" placeholder="search">
                    <input type="submit" class="header-submit" placeholder="search">
                </form>
            </div>
        </div>
    </div>
</header>

<div class="page main">

    <div class="wrapper">
        <div class="menu-categories">
            <div class="category">
                <a href="#1">Collectibles & Art</a>
            </div>
            <div class="subcategory">
                <a href="#1">Electronics</a>
            </div>
            <div class="subcategory">
                <a href="#1">fashion</a>
            </div>
            <div class="subcategory">
                <a href="#1">Electronics</a>
            </div>
            <div class="subcategory active">
                <a href="#1">Home & Garden</a>
            </div>
            <div class="subcategory">
                <a href="#1">motors</a>
            </div>
            <div class="subcategory">
                <a href="#1">Sporting Goods</a>
            </div>
            <div class="subcategory">
                <a href="#1">Toys & Hobbies</a>
            </div>
            <div class="subcategory">
                <a href="#1">other categories</a>
            </div>
        </div>

        <div class="breadcrumbs">
            <nav>
                <ul>
                    <li><a href="#2">home</a></li>
                    <li><a href="#2">Collectibles & Art</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="sidebar left">
            <div class="filters">
                <form action="">
                    <div class="filter">
                        <div class="title">Category</div>
                        <div class="subcategories">
                            <div class="subcategory">
                                <input type="checkbox" name="subcategory" id="subcategory1" value="subcategory-1" checked="">
                                <label for="subcategory1">subcategory</label>
                            </div>
                            <div class="subcategory">
                                <input type="checkbox" name="subcategory" id="subcategory2" value="subcategory-2">
                                <label for="subcategory2">subcategory</label>
                            </div>
                            <div class="subcategory">
                                <input type="checkbox" name="subcategory" id="subcategory3" value="subcategory-3">
                                <label for="subcategory3">subcategory</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="title">Parameter</div>
                        <div class="subcategories">
                            <div class="subcategory">
                                <input type="checkbox" name="subcategory" id="value1" value="subcategory-1" checked="">
                                <label for="value1">value</label>
                            </div>
                            <div class="subcategory">
                                <input type="checkbox" name="subcategory" id="value2" value="subcategory-2">
                                <label for="value2">value</label>
                            </div>
                            <div class="subcategory">
                                <input type="checkbox" name="subcategory" id="value3" value="subcategory-3">
                                <label for="value3">value</label>
                            </div>
                        </div>
                    </div>
                    <input class="clear-filters" value="Clear filters" type="reset">
                </form>

            </div>

            <div class="filters category-name">
                <div class="filter">
                    <div class="title">Category Name</div>
                    <div class="subcategories">
                        <div class="subcategory">
                            <input type="checkbox" name="subcategory" id="subcategory4" value="subcategory-1" checked="">
                            <label for="subcategory4">Category Name</label>
                        </div>
                        <div class="subcategory">
                            <input type="checkbox" name="subcategory" id="subcategory5" value="subcategory-2">
                            <label for="subcategory5">Category Name</label>
                        </div>
                        <div class="subcategory">
                            <input type="checkbox" name="subcategory" id="subcategory6" value="subcategory-3">
                            <label for="subcategory6">Category Name</label>
                        </div>
                    </div>
                </div>

                <div class="filter">
                    <div class="title">Parameter Name</div>
                    <div class="subcategories">
                        <div class="subcategory">
                            <input type="checkbox" name="subcategory" id="parameter" value="subcategory-1" checked="">
                            <label for="parameter">Category Name</label>
                        </div>
                        <div class="subcategory">
                            <input type="checkbox" name="subcategory" id="parameter1" value="subcategory-2">
                            <label for="parameter1">Category Name</label>
                        </div>
                        <div class="subcategory">
                            <input type="checkbox" name="subcategory" id="parameter2" value="subcategory-3">
                            <label for="parameter2">Category Name</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">

            <div class="hyperlink">
                <a href="#100">Hyperthink</a>
            </div>

            <div class="items">
                <div class="item">
                    <div class="info">
                        <div class="title">Cracker is a baked food typically made from flour!</div>
                        <div class="description">
                            <p>A cracker is a baked food typically made from flour. Flavorings or seasonings, such as salt, herbs, seeds, and/or cheese, may be added to the dough or sprinkled on top before baking. Crackers are often branded as a nutritious and convenient way to consume a staple food or cereal grain.</p>
                        </div>
                    </div>
                    <a href="" class="preview">
                        <img src="img/cookie-1.jpg" width="250" height="250" alt="1">
                    </a>
                </div>
                <div class="item">
                    <div class="info">
                        <div class="title">Cracker is a baked food typically made from flour!</div>
                        <div class="description">
                            <p>A cracker is a baked food typically made from flour. Flavorings or seasonings, such as salt, herbs, seeds, and/or cheese, may be added to the dough or sprinkled on top before baking. Crackers are often branded as a nutritious and convenient way to consume a staple food or cereal grain.</p>
                        </div>
                    </div>
                    <a href="" class="preview">
                        <img src="img/cookie-2.jpg" width="450" height="438" alt="1">
                    </a>
                </div>
                <div class="item">
                    <div class="info">
                        <div class="title">Cracker is a baked food typically made from flour!</div>
                        <div class="description">
                            <p>A cracker is a baked food typically made from flour. Flavorings or seasonings, such as salt, herbs, seeds, and/or cheese, may be added to the dough or sprinkled on top before baking. Crackers are often branded as a nutritious and convenient way to consume a staple food or cereal grain.</p>
                        </div>
                    </div>
                    <a href="" class="preview">
                        <img src="img/cookie-3.jpg" width="216" height="218" alt="1">
                    </a>
                </div>
                <div class="item">
                    <div class="info">
                        <div class="title">Cracker is a baked food typically made from flour!</div>
                        <div class="description">
                            <p>A cracker is a baked food typically made from flour. Flavorings or seasonings, such as salt, herbs, seeds, and/or cheese, may be added to the dough or sprinkled on top before baking. Crackers are often branded as a nutritious and convenient way to consume a staple food or cereal grain.</p>
                        </div>
                    </div>
                    <a href="" class="preview">
                        <img src="img/cookie-4.jpg" width="500" height="500" alt="1">
                    </a>
                </div>

                <div class="item current">
                    <a href="" class="preview">
                        <img src="img/cookie-1.jpg" width="250" height="250" alt="1">
<!--                        <img src="img/cookie-4.jpg" width="500" height="500" alt="1">-->
                    </a>
                    <div class="info">
                        <div class="title">Cracker</div>
                        <div class="description">
                            <p class="price">1.99$</p>
                            <form action="" class="addtocard">
                                <input type="number" min="1" placeholder="1">
                                <input type="submit" class="secondary-button" value="add to card">
                            </form>
                        </div>

                        <div class="characteristics">
                            <div class="characteristic-tabs">
                                <div class="char-tabs" id="char-tabs">
                                    <div class="tabs-buttons">
                                        <ul>
                                            <li><a href="#characteristic">characteristic</a></li>
                                            <li><a href="#details">details</a></li>
                                            <li><a href="#feedbacks">feedbacks</a></li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-type" id="characteristic">
                                            <div class="info-inner">
                                                <div class="sub-title">Feed yourself:</div>
                                                <div class="discount">For every 10 crackers you have <strong>5%</strong> discount</div>

                                                <form class="feed">
                                                    <div class="counter">
                                                        <div class="count-left type">
                                                            <label for="select">Choose cracker</label>
                                                            <select id="select" class="choose">
<!--                                                                <option value="" disabled="" selected="" hidden="">---</option>-->
                                                                <option value="0.99" data="" selected="">small 0.99$</option>
                                                                <option value="1.99">medium 1.99$</option>
                                                                <option value="2.99">big 2.99$</option>
                                                            </select>
                                                        </div>
                                                        <div class="count-right quantity">
                                                            <label for="amount">how much u need?</label>
                                                            <input id="amount" value="1" class="js-amount" placeholder="1" min="1" type="number">
                                                        </div>
                                                        <div class="count-left calculate">
                                                            <input class="calc secondary-button" value="buy" type="submit">
                                                        </div>
                                                        <div class="count-right cancel">
                                                            <input class="calc secondary-button js-reset" value="clear" type="reset">
                                                        </div>
                                                    </div>
                                                    <p class="result"></p>
                                                </form>

                                            </div>
                                            <div class="more">
                                                <a href="#purchase" class="">more...</a>
                                            </div>
                                        </div>

                                        <div class="tab-type" id="details">
                                            <div class="info-inner">
                                                <div class="sub-title">details:</div>
                                                <p class="item-info">
                                                    This is a fantastic, quick to prepare snack. You will love the combination of salty/sweet taste and the crunch of the almonds and browned crackers. I got the recipe from my friend after we tasted these snacks at her home. These crackers are really pleasing to the eye and will keep several days in a container with a tightly-fitting lid. They would also make a great Christmas gift in a decorative tin.
                                                    This is a fantastic, quick to prepare snack. You will love the combination of salty/sweet taste and the crunch of the almonds and browned crackers. I got the recipe from my friend after we tasted these snacks at her home. These crackers are really pleasing to the eye and will keep several days in a container with a tightly-fitting lid. They would also make a great Christmas gift in a decorative tin.
                                                    This is a fantastic, quick to prepare snack. You will love the combination of salty/sweet taste and the crunch of the almonds and browned crackers. I got the recipe from my friend after we tasted these snacks at her home. These crackers are really pleasing to the eye and will keep several days in a container with a tightly-fitting lid. They would also make a great Christmas gift in a decorative tin.
                                                </p>
                                            </div>
                                            <div class="more">
                                                <a href="#purchase" class="">more...</a>
                                            </div>
                                        </div>

                                        <div class="tab-type" id="feedbacks">
                                            <div class="info-inner">
                                                <div class="sub-title">feedbacks:</div>
                                            </div>
                                            <div class="more">
                                                <a href="#purchase" class="">more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<footer>
    <div class="contact-us">
        <div class="wrapper">
            <div class="contact-menu">
                <ul>
                    <li><a href="#4" class="mail">Email Us</a></li>
                    <li><a href="#4" class="chat">Live Chat</a></li>
                    <li><a href="#4" class="call">Have Us Call You</a></li>
                    <li><a href="#4" class="message">Text Alerts</a></li>
                </ul>
            </div>
            <div class="connections">
                <a href="#3" class="logo">
                    <img src="img/crested.png" width="224" height="94">
                    <h2>(877) 547-5143</h2>
                </a>
                <div class="follow">
                    <div class="connect">
                        <p>see what’s happening this week</p>
                        <a href="#4">CB Connections</a>
                    </div>
                    <div class="social">
                        <div class="title">Connect with us</div>
                        <ul>
                            <li><a href="#facebook" class="facebook">facebook</a></li>
                            <li><a href="#twitter" class="twitter">twitter</a></li>
                            <li><a href="#pinterest" class="pinterest">pinterest</a></li>
                            <li><a href="#instagram" class="instagram">instagram</a></li>
                            <li><a href="#vimeo" class="vimeo">vimeo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="in-touch">
                <div class="menu">
                    <ul>
                        <li><a href="#5">Employment</a></li>
                        <li><a href="#5">media</a></li>
                        <li><a href="#5">value</a></li>
                        <li><a href="#5">legal</a></li>
                        <li><a href="#5">partners</a></li>
                        <li><a href="#5">donations</a></li>
                    </ul>
                </div>
                <div class="newsletter">
                    <form action="index.php?action=signup" method="post" class="email">
                        <label for="sign-up">Get the latest CB Newsletter!</label>
                        <input type="text" placeholder="Enter Email Address" id="sign-up">
                        <input type="submit" value="sing up">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="partners">
        <ul>
            <li><a href="#2"><img src="img/cola.png" width="160" height="65"></a></li>
            <li><a href="#2"><img src="img/volvo.png" width="101" height="101"></a></li>
            <li><a href="#2"><img src="img/whiskey.png" width="113" height="105"></a></li>
            <li><a href="#2"><img src="img/coretex.png" width="138" height="138"></a></li>
            <li><a href="#2"><img src="img/montanya.png" width="160" height="84"></a></li>
            <li><a href="#2"><img src="img/bud.png" width="149" height="74"></a></li>
        </ul>
    </div>
</footer>

</body>