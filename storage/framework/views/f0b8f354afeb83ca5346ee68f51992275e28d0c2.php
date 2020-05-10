<!--    Page d'acceuil  -->
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Babillard Douala IUI</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo e(asset('images/uc-icam.jpg')); ?>">
</head>
<body>

<!-- Conteneur de l'en-tête _ Menu de navigation simple -->
<div class="container white">
    <nav class="navbar navbar-expand-lg navbar-light white">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="/images/logo_ucac-icam.png" class="img-fluid"
                                                         alt="Logo UCAC-ICAM"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="<?php echo e(route('login')); ?>" tabindex="-1" aria-disabled="true">Se
                        connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="<?php echo e(route('register')); ?>" tabindex="-1"
                       aria-disabled="true">S'inscrire</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!--Bandeau Orange sur la page d'acceuil avec Mot d'acceuil et Carroussel à droite-->
<div class="container-fluid mb-5" id="bandeauAcceuil">
    <div class="row">
        <!--Mot d'acceuil-->
        <div class="col-sm-12 col-md-6" id="motAcceuil">
            <div class="milieu">
                <h2 class="text-center">BABILLARD NUMERIQUE</h2>
                <h4 class="text-center">Institut UCAC-ICAM -- Campus de Douala</h4>
            </div>
        </div>

        <!--Carroussel de l'acceuil-->
        <div class="col-sm-12 col-md-6" id="carrousselAcceuil">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-95 imagesAcceuil img-fluid" src="/images/bulletin_board_1.png"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-95 imagesAcceuil img-fluid" src="/images/bulletin_board_2.png"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-95 imagesAcceuil img-fluid" src="/images/bulletin_board_3.jpg"
                             alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="content" id="Annonces">
    <!--CONTENEUR DES ANNONCES-->
    <div class="container-fluid justify-content-center mt-5">
        <div class="row view-group">
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <div class="img-annonce">
                    <a href="/images/apercu1.png"><img src="/images/apercu1.png" class="d-block w-100 img-fluid" alt=""></a>
                    <br>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonces">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <div class="img-annonce">
                    <a href="/images/apercu1.png"><img src="/images/apercu1.png" class="d-block w-100 img-fluid" alt=""></a>
                    <br>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 offset-2 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <div class="img-annonce">
                    <a href="/images/apercu2.png"><img src="/images/apercu2.png" class="d-block w-100 img-fluid" alt=""></a>
                    <br>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="w-100"></div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="w-100"></div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-4 col-xl-3 mb-5 mx-auto text-justify shadow annonce">
                <h5 class="font-weight-bold">TITRE DE L'ANNONCE</h5>
                <p>APERCU DE LA PIECE JOINTE</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempora vero quo quia
                    repudiandae quisquam consectetur velit placeat nobis perferendis quod, sit iure corrupti deserunt
                    officiis maiores cumque ex consequatur?</p>
                <p>Date de publication : jj/mm/aaaa</p>
                <p>Publié par : utilisateur</p>
            </div>
        </div>
    </div>
</section>


<!--PIED DE PAGE-->
<footer>
    <div id="footer" class="container rounded-top">
        <div class="row justify-content-center">
            <div class="col-10 d-flex flex-sm-column flex-md-row justify-content-around flex-row">
                <div class="my-auto text-white">
                    <p class="my-auto">© Copyright - BAD Jrs</p>
                </div>

                <!--Mentions légales-->
                <!-- Button trigger modal -->
                <div class="my-auto">
                    <button type="button" class="btn shadow" data-toggle="modal" data-target="#exampleModalScrollable">
                           <span class="text-white">Mentions légales</span>
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-orange-clair">
                                <h5 class="modal-title text-white" id="exampleModalScrollableTitle">Mentions légales</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-bod">
                                <p class="m-sm-1 m-md-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate velit nec
                                    orci dignissim rhoncus. Vivamus non libero vitae elit tempus auctor. Nulla ultricies
                                    bibendum velit, in fringilla sapien mattis in. Fusce sed erat nunc. Mauris condimentum
                                    id purus in dictum. Sed dignissim erat et hendrerit blandit. Duis condimentum nulla
                                    risus, eu cursus odio eleifend et.

                                    Aenean convallis dapibus ultrices. Proin non interdum tellus, vitae molestie ex. Duis
                                    sollicitudin diam quam. Vivamus dictum tortor faucibus metus vulputate mollis. Cras
                                    vitae justo lorem. Etiam ultricies hendrerit leo, at facilisis ipsum luctus eget. Nunc
                                    aliquam orci vitae lacus elementum viverra.

                                    Phasellus nisl odio, commodo sed scelerisque sit amet, viverra quis ligula. Class aptent
                                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                                    Mauris tempus lacus vitae porttitor semper. Ut faucibus vitae ligula eu pretium. Etiam
                                    sagittis vulputate sodales. Nunc molestie est nec quam blandit pulvinar. Maecenas in
                                    dapibus nibh. Praesent in libero odio. Ut consequat vel massa eu porttitor. Sed vitae
                                    magna metus. Vivamus nec malesuada eros.

                                    Sed auctor molestie sem sit amet fringilla. Sed elit nisl, vulputate nec lacus ut,
                                    interdum varius metus. Nullam dictum lorem elit, vitae vehicula neque accumsan id. Ut
                                    euismod lorem a lectus malesuada, nec maximus justo dapibus. Suspendisse sollicitudin
                                    pretium ultricies. Fusce consectetur leo lacus, sit amet scelerisque lorem sodales
                                    vitae. Quisque sit amet odio consequat, lobortis elit non, semper lacus. In tristique ut
                                    sem sit amet viverra. Sed congue velit quam, eget tincidunt diam imperdiet quis. In hac
                                    habitasse platea dictumst. Praesent ullamcorper dolor ut augue malesuada finibus. Mauris
                                    in hendrerit quam. Maecenas ac efficitur magna, in tincidunt ex.

                                    Quisque ut molestie ex, quis ullamcorper enim. Donec eu elit vitae nunc viverra
                                    vulputate. Cras efficitur vel lacus in consectetur. Fusce ornare arcu sed est volutpat,
                                    in fringilla tortor sodales. Quisque ullamcorper neque a justo ultrices, quis
                                    scelerisque ex tristique. Fusce faucibus elit sit amet tellus commodo sagittis. Maecenas
                                    nec arcu dignissim, volutpat ante a, iaculis nunc. Ut sed massa vitae nulla dapibus
                                    ultrices fermentum a eros. Vivamus et sapien purus. Praesent imperdiet enim turpis, ut
                                    suscipit nunc elementum eu.
                                </p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-auto text-white">
                    <p class="my-auto">Autres</p>
                </div>


            </div>
        </div>
    </div>
</footer>

<!--SCRIPTS (CDN)-->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\BabillardTest\resources\views/welcome.blade.php ENDPATH**/ ?>