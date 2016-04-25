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

    <div class="page add">
        <div class="wrapper">
            <div class="content">

                <div class="tab-content">
                    <div class="info-inner">
                        <div class="characteristic-tabs">

                            <form action="" class="feed" method="post" id="js-addItems">
                                <input type="hidden" name="form_id" value="addItems">
                                <div class="form-title">Put some crackers</div>
                                <div class="counter">
                                    <div class="count-left">
                                        <input id="title" name="title" value="" class="input-primary js-title" placeholder="put item title" type="text">
                                    </div>
                                    <div class="count-left">
                                        <input id="weight" name="weight" placeholder="put item wight" class="input-primary js-weight" type="number">
                                    </div>
                                    <div class="count-right">
                                        <input id="cost" name="cost" class="input-primary js-cost" placeholder="put item cost" type="number">
                                    </div>

                                    <div class="description">
                                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                                    </div>

                                    <div class="count-left">
                                        <input class="secondary-button" name="submit" id="submit" value="ok" type="submit">
                                    </div>
                                    <div class="count-right">
                                        <input class="secondary-button" name="cancel" id="cancel" value="clear" type="reset">
                                    </div>
                                </div>
                                <p class="result" id="result">
                                    <?php

                                        echo '<pre>';
                                            var_dump($_POST);
                                        echo '</pre>';

                                        if(isset($_POST['form_id']) && $_POST['form_id'] === 'addItems-sdsd'){
                                            echo ($_POST['form_id'] . " - form_id is OKEY");
                                        }else{
                                            echo ("form_id is WRONG");
                                        }

                                    ?>
                                </p>
                            </form>

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
</html>

<?php





