<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- Styles -->


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mr-10" href="#home_atomic">Atomic Global</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#audio">Audiography<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="container-fluid" id="#home_atomic">
        <div class="row Portada" style="height: 400px; ">

            <div class="col-12 align-self-center text-center">
                <img src="../../media/images/miavatar.png" class="img-fluid" width="200">
                <H1 class="White_Text_01">Welcome to Atomic Global</H1>
                <hr class="hr_white">
                <p class="White_Text_01">Everyting we do is music</p>
            </div>
        </div>
    </header>

    <section class="container" id="audio">
        <div class="row mb-5" style="background-color: #ffff;" >
            <div class="col-12 text-center mt-5">
                <H2>Auditive Experience</H2>
                <hr>
            </div>

            <div class="col-4 text-center mt-4">
                <h2>ALBUM NAME</h2>
                <img src="../../media/images/gridinicio/img1.jpg" alt="ImagenAlbums" class="imagengrid">
                <P>Descripcion del album</p>
            </div>
            <div class="col-4 text-center mt-4">
                <h2>ALBUM NAME</h2>
                <img src="../../media/images/gridinicio/img1.jpg" alt="ImagenAlbums" class="imagengrid">
                <P>Descripcion del album</p>
            </div>
            <div class="col-4 text-center mt-4">
                <h2>ALBUM NAME</h2>
                <img src="../../media/images/gridinicio/img1.jpg" alt="ImagenAlbums" class="imagengrid">
                <P>Descripcion del album</p>
            </div>
            <div class="col-4 text-center mt-4">
                <h2>ALBUM NAME</h2>
                <img src="../../media/images/gridinicio/img1.jpg" alt="ImagenAlbums" class="imagengrid">
                <P>Descripcion del album</p>
            </div>

            <div class="col-4 text-center mt-4">
                <h2>ALBUM NAME</h2>
                <img src="../../media/images/gridinicio/img1.jpg" alt="ImagenAlbums" class="imagengrid">
                <P>Descripcion del album</p>
            </div>

            <div class="col-4 text-center mt-4">
                <h2>ALBUM NAME</h2>
                <img src="../../media/images/gridinicio/img1.jpg" alt="ImagenAlbums" class="imagengrid">
                <P>Descripcion del album</p>
            </div>



        </div>
    </section>

    <section class="container-fluid" id="about">
        <div class="row justify-content-center py-5 AboutBackground" style="height: 600px;  ">

            <div class="col-12 text-center mt-5 mb-4">
                <H2 class="White_Text_01">About</H2>
                <hr class="hr_white">
            </div>
            <div class="col-4">
                <p class="White_Text_01">Jared Jimenez known by the stage name of AtomH or Jared Framework is an computer engineer and producer of electronic music from Mexico City.</p>
            </div>
            <div class="col-4">
                <p class="White_Text_01">YT CHANNEL: www.youtube.com/AtomHMusic</p>
            </div>
            <div class="col-12 text-center">
                <button type="button" class="btn btn-outline-secondary">Free Download</button>
            </div>
        </div>
    </section>

    <section class="container" id="contacto">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center mt-5">
                <H2>Contact Me</H2>
                <hr>
            </div>

            <div class="col-6 mt-5">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">

                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="msg-contact">Tellme More</label>
                        <textarea class="form-control" id="msg-contact" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary p-3">Submit</button>
                </form>

            </div>
        </div>
    </section>

    <footer class="container-fluid">
        <div class="row justify-content-center py-5">
            <div class="col-4 text-center  ">
                <h3>Location</h3>
                <p class="White_Text_01">hola</p>
            </div>
            <div class="col-4 text-center ">
                <h3>Location</h3>
                <a href="">F</a>
                <a href="">T</a>
                <a href="https://www.youtube.com/c/AtomHMusic">I</a>
            </div>
            <div class="col-4 text-center ">
                <h3>Location</h3>
                <p class="White_Text_01">Excusándose, Sofía tiró su whisky al desagüe de la banqueta. El cadáver de Wamba, rey godo de España, fue exhumado y trasladado en una caja de zinc que pesó un kilo. El veloz murciélago hindú comía feliz cardillo y kiwi.</p>
            </div>
        </div>
    </footer>
</body>

</html>