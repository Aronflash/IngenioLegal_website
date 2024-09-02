<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alumnado de Marco Legal - Ing. de Sistemas - Unefa">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home</title>
</head>
<body>
   

    <section class="anima">
        <img src="assets/img/nubes.png" id="nubes">
        <img src="assets/img/sol.png" id="sol">
        <img src="assets/img/montaña.png" id="montaña">
        <a href="#swiper-container" id="btn">Explora</a>
    </section>


    <script>
        let stars = document.getElementById('nubes');
        let moon = document.getElementById('sol');
        let mountains_behind = document.getElementById('montaña');
        let btn = document.getElementById('btn');
        let header = document.querySelector('header')

        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            nubes.style.left = value * 0.25 + 'px';
            sol.style.top = value * -1 + 'px';
            montaña.style.top = value * 0.5 + 'px';
            btn.style.marginTop = value * 1.5 + 'px';
            header.style.top = value * 0.5 + 'px';
            
        })
    </script>
</body>
</html>