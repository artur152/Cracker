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
        require_once('database-connect.php');
    ?>

    <?php

        $sql = 'SELECT * FROM cookies';
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc() ) {
    //        echo " <br> id = " . $row['id'];
    //        print_r($row);
            $donuts[] = $row;
        }
        //    echo '<pre>';
        print_r($donuts);
        //    echo '</pre>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';

    ?>

    <div class="page main">
        <div class="wrapper">
            <div class="content">

                <table class="cookies">
                    <tr>
                        <th>
                            <?php echo 'id' ?>
                        </th>
                        <th>
                            <?php echo 'title' ?>
                        </th>
                        <th>
                            <?php echo 'weight' ?>
                        </th>
                        <th>
                            <?php echo 'cost' ?>
                        </th>
                        <th>
                            <?php echo 'description' ?>
                        </th>
                    </tr>
                    <?php foreach($donuts as $key => $item): ?>
                        <tr>
                            <td>
                               <?php echo $item['id'] ?>
                            </td>
                            <td>
                                <?php echo $item['title']  ?>
                            </td>
                            <td>
                                <?php echo $item['weight']  ?>
                            </td>
                            <td>
                                <?php echo $item['cost']  ?>
                            </td>
                           <td>
                               <?php echo $item['description']  ?>
                           </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                </div>
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>

</body>































