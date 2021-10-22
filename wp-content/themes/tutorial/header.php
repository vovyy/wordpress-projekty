<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fonty -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' <!-- css -->
    <link href="<?php echo home_url(); ?>/templates/data/css/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo home_url(); ?>/templates/data/css/fonts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- js -->
    <script src="<?php echo home_url(); ?>/templates/data/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo home_url(); ?>/templates/data/js/scripts.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>

<body>
    <h1 class="screenReaderElement"></h1>
    <header>
        <nav>
            <ul class="items">
                <li>SERVIS</li>
                <li>EXPRESNÍ DOPRAVA</li>
                <li>PŘEHLEDOVÝ KATALOG</li>
            </ul>
        </nav>
        <div class="contacts">
            <span>
                <i class="fas fa-phone">
                </i> +420 577 700 150
            </span>

            <span><i class="far fa-envelope">
                </i> info@raveo.cz
            </span>

            <span>
                <select>
                    <option value="EN">EN</option>
                </select>
            </span>
        </div>


    </header>