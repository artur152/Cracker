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
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="jquery.inputmask-3.x/jquery.maskedinput.min.js"></script>

    <link rel="stylesheet" href="css/base.css">
    <script src="js/main.js"></script>

    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
</head>

<body>

    <?php
        include 'header.php';
        include 'selectItems.php';
        $donut = chooseDonuts();
    ?>
    <?php
    //PDO
//          $product = chooseDonuts();
//          function priceSelect($price) {
//              $price = chooseDonuts();
//              $option = '';
//              foreach ($price as $key_item => $item) {
//                  $option .= '<option value="' . $item['id'] . '" data-price="' . $item['cost'] . '">'
//                      . $item['title'] . ' $' . $item['cost'] . '</option>';
//              }
//              return $option;
//          }
    ?>

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
        </div>

        <div class="banner primary">
            <div class="slick-slider">
                <div class="slider-item">
                    <div class="slider-info">
                        <div class="slider-image">
                            <img src="img/banner-main-1.jpg" width="3257" height="1928">
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-info">
                        <div class="slider-image">
                            <img src="img/banner-main-2.jpg" width="2048" height="1536">
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-info">
                        <div class="slider-image">
                            <img src="img/banner-main-3.jpeg" width="1310" height="737">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="sidebar left">
                <div class="filters">
                    <form action="" class="form-filter" method="post" id="form-filter">
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
                    <?php foreach($donut as $key_product => $product): ?>
                        <div class="item-product" data-price="<?php echo $product['cost'] ?>">
                            <div class="info">
                                <div class="title"><?php echo $product['title'] ?></div>
                                <div class="description">
                                    <p><?php echo $product['description'] ?></p>
                                </div>
                            </div>
                            <div class="addtocard">
                                <form action="" class="to_card">
                                    <div class="pickUp">
                                        <input type="number" value="1" class="item-amount" min="1" placeholder="1">
                                        <input type="submit" class="secondary-button" value="add to card">
                                    </div>
                                    <div class="price"></div>
                                </form>
                            </div>
                            <a href="" class="preview">
                                <img src="<?php echo $product['url'] ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>

                    <div class="item-product current">
                        <div class="slider secondary">
                            <div class="slider-detail">
                                <?php foreach($donut as $key_product => $product): ?>
                                    <div data-slick="<?php echo $product['id'] ?>" class="slider-item">
                                        <div class="slider-info">
                                            <div class="slider-image">
                                                <img src="<?php echo $product['url'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div id="carousel" class="carousel">
                                <?php foreach($donut as $key_product => $product): ?>
                                    <div>
                                        <img src="<?php echo $product['url'] ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="info">
                            <div class="title">Cracker</div>
                            <div class="characteristic-tabs" id="characteristic-tabs">
                                <div class="tabs-buttons">
                                    <ul>
                                        <li><a href="#characteristic">characteristic</a></li>
                                        <li><a href="#detail">details</a></li>
                                        <li><a href="#feedbacks">feedbacks</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-type" id="characteristic">
                                        <div class="info-inner">

                                            <form action="" class="feed" id="js-feed">
                                                <div class="form-title">Feed yourself:</div>
                                                <div class="discount">For every 10 crackers you have <strong>10%</strong> discount</div>
                                                <div class="counter">
                                                    <div class="count-left">
                                                        <label for="select">Choose cracker</label>
                                                        <select id="choose" class="choose">
                                                            <?php foreach($donut as $key_item => $item): ?>
                                                                <option value="<?php echo $item['id'] ?>" data-price="<?php echo $item['cost'] ?>">
                                                                    <?php echo $item['title'] ?> $<?php echo $item['cost'] ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="count-right">
                                                        <label for="amount">how much u need?</label>
                                                        <input id="amount" type="number" value="1" placeholder="1" min="1">
                                                    </div>
                                                    <div class="count-left">
                                                        <input class="secondary-button js-calc" value="buy" type="submit">
                                                    </div>
                                                    <div class="count-right">
                                                        <input class="secondary-button js-reset" value="clear" type="reset">
                                                    </div>
                                                </div>
                                                <div class="result" id="result"></div>
                                                <div class="calc-description" id="calc-description"></div>
                                                <!-- for calc-description -->
                                                <script>
//                                                   var description = {
//                                                        <?php //foreach($donut as $item): ?>
<!--                                                        --><?php //echo $item['id'] ?>// : '<?php //echo $item['description'] ?>//',
//                                                        <?php //endforeach; ?>
//                                                    }
                                                    var description = {
                                                        <?php foreach ($donut as $key => $item) {
                                                            echo $item['id'] . ':"' . $item['description'] . '",';
                                                        }?>
                                                    }
                                                </script>
                                                <div class="more">
                                                    <a href="#purchase" class="">more...</a>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="tab-type" id="detail">
                                        <div class="info-inner">
                                            <div class="sub-title">details:</div>
                                            <p class="info-item">
                                                <!--code for details-->
                                                <script>
                                                    var description = {
                                                         <?php foreach($donut as $item): ?>
                                                           <?php echo $item['id'] ?> : '<?php echo $item['description'] ?>',
                                                         <?php endforeach; ?>
                                                     }
                                                </script>
                                            </p>
                                            <div class="more">
                                                <a href="#purchase" class="">more...</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-type" id="feedbacks">
                                        <div class="info-inner">
                                            <div class="sub-title">feedbacks:</div>
                                            <p class="info-item">
                                                This is a fantastic.
                                            </p>
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

    <?php include 'footer.php'; ?>

</body>
</html>
