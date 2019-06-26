<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="container">
        <div class="table-responsive-lg">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php for($i =1; $i<=10; $i++){ ?>
                        <th scope="col"><?php echo $i; ?> </th>
                    <?php } ?>
                </tr>
                </thead>
                <tbody>
                <form action="index.php" method="post">
                    <?php for($i = 1; $i<=10; $i++){ ?>
                        <tr>
                            <?php for($j =0; $j<=10; $j++) {
                                if($j == 0){ ?>
                                    <th scope="row"><?php echo $i; ?></th>
                                <?php } else{ ?>
                                    <td> <input type="button" name="button" param1="<?php echo $i; ?>" param2="<?php echo $j; ?>"
                                                param3="<?php echo '*'; ?>" value="<?php echo $i." x ".$j; ?>">  </td>
                                <?php } ?>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="rezultat col-lg-4">
            <p>REZULTAT: </p>
            <p id="rezulat"></p>
        </div>
    </div>
</div>
<script src="js/calculator.js"></script>
</body>
</html>