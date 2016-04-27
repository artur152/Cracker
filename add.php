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

    <?php include 'header.php' ?>

    <div class="page add">
        <div class="wrapper">
            <div class="content">

                <div class="tab-content">
                    <div class="info-inner">
                        <div class="characteristic-tabs">

                            <form action="pushItems.php" method="post" class="feed" id="js-addItems">
                                <input type="hidden" name="form_id" value="addItems">
                                <div class="form-title">Put some crackers</div>
                                <div class="counter">
                                    <div class="count-left">
                                        <input id="title" name="title" value="" class="input-primary js-title" placeholder="put item title" type="text">
                                    </div>
                                    <div class="count-left">
                                        <input id="weight" name="weight" placeholder="put item wight" class="input-primary js-weight" type="number" step="any">
                                    </div>
                                    <div class="count-right">
                                        <input id="cost" name="cost" class="input-primary js-cost" placeholder="put item cost" type="number" step="any">
                                    </div>

                                    <div class="description">
                                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                                    </div>

                                    <div class="count-left">
                                        <input class="secondary-button" name="submit" id="submit" value="Add" type="submit">
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

                                        if(isset($_POST['form_id']) && $_POST['form_id'] === 'addItems'){
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

    <?php include 'footer.php' ?>

</body>
</html>






