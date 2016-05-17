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
        require_once 'database-connect.php';
    ?>
    <?php
        $sql = "SELECT * FROM cookies";
        $result = $conn->query($sql);

//    PDO
//        $donuts = $result->fetchAll();

//    MySQLi Object-Oriented
        while ($row = $result->fetch_assoc() ) {
            $donuts[] = $row;
        }
//        print_r($donuts);
    ?>

    <div class="page database">
        <div class="wrapper">
            <div class="content">

                <table class="cookies">
                    <thead>
                        <tr>
                            <th>
                                <span>id</span>
                            </th>
                            <th>
                                <span>title</span>
                            </th>
                            <th>
                                <span>weight</span>
                            </th>
                            <th>
                                <span><?php print_r(array_keys($donuts[0])[3]) ?></span>
                            </th>
                            <th>
                                <span><?php print_r(array_keys($donuts[0])[4]) ?></span>
                            </th>
                            <th>
                                <span>options</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($donuts as $key => $item): ?>
                        <tr>
                            <td>
                                <span><?php echo $item['id'] ?></span>
                            </td>
                            <td>
                                <span class="title"><?php echo $item['title']  ?></span>
                            </td>
                            <td>
                                <span><?php echo $item['weight'] . 'gm.' ?></span>
                            </td>
                            <td>
                                <span><?php echo $item['cost'] . '$' ?></span>
                            </td>
                            <td class="description">
                                <span>
                                    <?php echo $item['description']  ?>
                                </span>
                            </td>
                            <td class="edit">
                                <a href="edit.php?" class="primary-button" id="<?php echo $item['id'] ?>">edit</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="options">
                    <a href="edit.php?" class="primary-button">delete</a>
                    <a href="add.php?" class="primary-button">add</a>
                </div>
            </div>
        </div>
    </div>

<!--    <script>-->
<!--        did*.stop();-->
<!--    </script>-->
    <?php
        include 'footer.php';
    ?>

    <a href=""></a>

</body>































