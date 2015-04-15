<?php
    $quotes = [
        'Getting lost is a good way to find yourself',
        'I\'ve not failed. I have just found 10,000 links that won\'t work.'
    ];

    $quote = $quotes[rand(0, sizeof($quotes) - 1)];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page not found | Buffered Reader</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/ico" href="http://dev.bufferedreader.org/favicon.png" />
        <link href="/build/css/app-35aa8911.css" rel="stylesheet">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>

    <header class="intro-header " style="background-image: url('/img/404-background.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading ">
                        <h1 itemprop="name">{{ $quote }}</h1>
                        <h2 class="subheading">404 - Page not found</h2>
                        <span class="meta"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Error 404 - Page not found</h2>
                <p>The page you were looking was not found on this server. You can browse the <a href="http://dev.bufferedreader.org">latest issue</a> instead.</p>
            </div>
        </div>
    </div>

    </body>
</html>