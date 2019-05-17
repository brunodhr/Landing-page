<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="one-time">
            
        </div>
        <?php
            $url = 'https://jsonplaceholder.typicode.com/photos';
            $data = file_get_contents($url);
            $characters = json_decode($data);
            
            foreach ($characters as $character) {
        ?>
                <div>
                    <img src="<?php echo $character->thumbnailUrl ?>" alt="">
                    <a href="<?php echo $character->url ?>"></a>
                </div>
        <?php
            }
        ?>
        <h1>asdasd</h1>
    </div>
    <script>
        $('.one-time').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    </script>
</body>
</html>