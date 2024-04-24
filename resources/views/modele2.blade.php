<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title> @yield('pagetitle')-bike my ability</title>
    <link rel="stylesheet" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <style>

        body
        {
            background-color: orangered;
            color: blue;
        }
    </style>
</head>
<body>
<header>
    <a href="#maincontent" class="visually-hidden-focusable"> Aller au contenu</a>
    <img src="https://png.pngtree.com/png-vector/20191028/ourmid/pngtree-logo-mountain-bike-cycling-mtb-isolated-vector-silhouette-downhill-cyclist-png-image_1908266.jpg"  width="150" alt="">
    <p> Bike My Ability </p>
</header>

<main  id="maincontent">
    <div class="container">
        <h1> @yield('h1page') </h1>



    @section('contenuprincipal')
            <!-- quelques photos par exemple via une galerie Bootstrap) -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3"> <!-- début galerie -->

                <div class="col"> <!-- début col-->



                        @yield("imgal_1")


                </div> <!-- fin  col-->




                <div class="col"> <!-- début col-->



                    @yield("imgal_2")


                </div> <!-- fin  col-->



                <div class="col"> <!-- début col-->



                    @yield("imgal_3")


                </div> <!-- fin  col-->



                <div class="col"> <!-- début col-->
                    @yield("imgal_4")


                </div> <!-- fin  col-->

                <div class="col"> <!-- début col-->
                    @yield("imgal_5")

                </div> <!-- fin  col-->
                <div class="col"> <!-- début col-->
                    @yield("imgal_6")


                </div> <!-- fin  col-->

            </div>
            <!-- bref descriptif du dmodèle -->
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi at aut consequatur dignissimos dolorum ea enim et eveniet explicabo illum inventore magnam quas quibusdam quis, quod similique voluptas voluptatem! Consequuntur deserunt fugit sit voluptatibus? Ab, accusamus, amet animi cum dicta dolore dolorem earum ipsum necessitatibus pariatur repudiandae sint voluptatem?

            <h2>Points forts</h2>
            <ul>
                <li>@yield('pforts_1')</li>
                <li>@yield('pforts_2')</li>
                <li></li>
                <li></li>
            </ul>
            <h2>Points faibles</h2>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <h2>Principales caractéristiques</h2>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>

            <h2>Marque</h2>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <h2>Revendeurs</h2>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <h2> Commentaires </h2>
            <form action="" method="">
                <!-- diffférents champs +  bouton-->
            </form>
        @show
        <footer>
            <p> Bike my ability - tous droits réservés</p>
        </footer>
    </div>
</body>
</html>
