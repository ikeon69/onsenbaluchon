<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Voici notre site On s'en baluchon !! ... on met en scène les blagues qui nous font marrer, c est souvent très con mais on s'en baluchon.">
    <meta name="author" content="">
    <title>ON S'EN BALUCHON</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/frontend/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src="<?php echo base_url('assets/frontend/js/plugins/retina/retina.min.js'); ?>"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/frontend/css/plugins/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/plugins/owl-carousel/owl.theme.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/plugins/owl-carousel/owl.transitions.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/plugins/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/plugins/background.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/plugins/animate.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Vitality Theme CSS -->
    <!-- Uncomment the color scheme you want to use. -->
    <!-- <link href="assets/css/vitality-red.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-aqua.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-blue.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-green.css" rel="stylesheet" type="text/css"> -->
    <link href="<?php echo base_url('assets/frontend/css/vitality-orange.css'); ?>" rel="stylesheet" type="text/css">
    <!-- <link href="assets/css/vitality-pink.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-purple.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-tan.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-turquoise.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="assets/css/vitality-yellow.css" rel="stylesheet" type="text/css"> -->
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">

    <a href="https://www.youtube.com/channel/UCRGFxAYwNzTjlUApOS7sw3w" class="btn btn-danger btn-sabonner"  role="button" target="_blank"><i class="fa fa-youtube fa-fw youtube" aria-hidden="true"></i></a> 
    <a href="https://www.facebook.com/onsenbaluchon" class="btn btn-facebook" role="button" target="_blank"><i class="fa fa-facebook fa-fw facebook" aria-hidden="true"></i></a>
       

    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="<?php echo base_url('assets/frontend/img/logo_onsenbaluchon2.jpg'); ?>" class="img-responsive" alt="logo onsenbaluchon">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#videos"><i class="fa fa-video-camera fa-fw fa-2x" aria-hidden="true"></i> Vidéos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#acteurs"><i class="fa fa-male fa-fw fa-2x" aria-hidden="true"></i> Acteurs</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#sabonner"><i class="fa fa-youtube-play fa-fw fa-2x" aria-hidden="true"></i> S'abonner</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#contact"><i class="fa fa-envelope-o fa-fw fa-2x" aria-hidden="true"></i> Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('welcome/login'); ?>" target="_blank" ><i class="fa fa-user fa-fw fa-2x" aria-hidden="true"></i> Connexion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Instructions: Set your background image using the URL below. -->

    <header class="video">
        <div class="overlay"></div>
        <div class="intro-content">

            <img src="<?php echo base_url('assets/frontend/img/logo_onsenbaluchon4.jpg'); ?>" class="img-responsive img-centered" alt="logo onsenbaluchon">
            <div class="brand-name">ON S'EN BALUCHON</div>
            <hr class="colored">
            <div class="brand-name-subtext">By KRISS et GUNLET</div>

            <div class="boutons-video">                
                <i class="fa fa-youtube-play" aria-hidden="true" id="play"></i>
                <i class="fa fa-pause" aria-hidden="true" id="pause"></i>
                <i class="fa fa-volume-off" aria-hidden="true" id="mute"></i>
            </div>

        </div>
        <div class="scroll-down page-scroll">
            <a class="btn page-scroll" href="#videos"><i class="fa fa-angle-down"></i></a>
        </div>



    </header>


    <section id="videos">
        <div class="container text-center wow fadeIn">

            <h2>VIDEOS ON S'EN BALUCHON</h2>
            <hr class="colored">
            <p>Cette chaîne s'en baluchon!!</p>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="portfolio-filter">
                        <ul id="filters" class="clearfix">

                            <li>
                                <span class="filter active" data-filter="<?php foreach($categories as $cat) { echo $cat->slug.' '; } ?>">Tous</span>
                            </li>

                            <?php foreach($categories as $cat) { ?>
                                <li>
                                <span class="filter" data-filter="<?php echo $cat->slug; ?>"><?php echo $cat->title; ?></span>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="portfoliolist">

                        <?php  
                       
                        foreach($videos as $vid) 
                        { ?>

                            <div class="portfolio <?php echo $vid->cat_slug; ?>" data-cat="<?php echo $vid->cat_slug; ?>" href="#portfolioModal<?php echo $vid->id; ?>" data-toggle="modal">
                                <div class="portfolio-wrapper">
                                    <img src="<?php echo $vid->image; ?>" alt="<?php echo $vid->title; ?>">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <a class="text-title"><?php echo $vid->title; ?></a>
                                            <span class="text-category"><?php echo $vid->cat_title; ?></span>
                                        </div>
                                        <div class="caption-bg"></div>
                                    </div>
                                </div>
                            
                            </div>
                             
                             <?php 
                                }
                            ?>
                                         
                            
                    </div>
                  
                </div>
                    <div class="pagination">
                        <ul>
                            <li>
                            <?php echo $this->pagination->create_links(); ?>
                            </li>
                        </ul>
                    </div>
                        
             
            </div>

        </div>
       
    </section>

    <a href="https://www.youtube.com/channel/UCRGFxAYwNzTjlUApOS7sw3w" class="btn btn-block btn-full-width" target="_blank"><i class="fa fa-youtube fa-fw fa-2x"></i>S'ABONNER A ON S'EN BALUCHON MAINTENANT!</a>

    <section id="acteurs" class="bg-gray">
        <div class="container text-center wow fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <h2>LES ACTEURS</br> ON S'EN BALUCHON !</h2>
                    <p>Nous sommes une bande de copains qui s'en baluchon complètement !</p>
                    <hr class="colored">
                </div>
            </div>
            <div class="row content-row">
                
<!-- Article -->
            <article>

                <!-- List of people and description with their contact details which are visable on hover -->
                <ul class="thumbnails about-items">
                    <?php $compteur=1 ?><!-- vu qu'il y a 7 acteurs on crée un compteur au début du foreach puis on met une condition que si le compteur ==7 alors il devra faire un col-md-offset-4
                    ce qui permettra au dernier acteur d'être centré et non décalé ou mal placé-->
                    <?php foreach($equipes as $equipe) { ?>
                        <li class="col-md-4 col-sm-6 col-xs-12 <?php if ($compteur==7){echo 'col-md-offset-4';} ?> center">
                             <div class="item">
                                <!-- Team member image -->
                                <img class="img-circle" src="<?php echo $equipe->image; ?>" alt="<?php echo $equipe->surname; ?>">
                                
                                <!-- Team memeber details, activated on hover -->
                                <div class="about-overlay img-circle">
                                    <div class="social-icons sicon-white">
                                        <a href="https://www.facebook.com/onsenbaluchon" class="sicon-facebook" target="_blank"><i>Facebook</i></a>
                                        <a href="https://www.youtube.com/channel/UCRGFxAYwNzTjlUApOS7sw3w" class="sicon-youtube" target="_blank"><i>Youtube</i></a>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Team member name and function -->
                            <h5><?php echo $equipe->surname; ?></h5>

                            <h5><?php echo $equipe->roles; ?></h5></br>
                            
                            <!-- Team member short info -->
                            <!--<p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>-->
                        </li>
                    <?php $compteur++; ?>

                    <?php } ?>
                    
                </ul>

            </article>
            <!-- End Article -->


            </div>
        </div>
    </section>




    <aside id="sabonner" class="cta-quote" style="background-image: url('<?php echo base_url("assets/frontend/img/bg-aside.jpg"); ?>');">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <span class="quote">Vous connaissez <span class="text-primary">ON S'EN BALUCHON</span>?  j'en ai entendu parler apparemment leur chaîne est sur <span class="text-primary">YOUTUBE</span> j'hésite à les suivre ? et donc m' <span class="text-primary">ABONNER</span>. Si vous aussi vous voulez vous abonnez c'est juste en dessous</span>
                    <hr class=" colored">
                    <a class="btn btn-danger page-scroll" href="https://www.youtube.com/channel/UCRGFxAYwNzTjlUApOS7sw3w"><i class="fa fa-youtube-play" aria-hidden="true" id="play"></i> S'abonner</a>
                </div>
            </div>
        </div>
    </aside>
   
    <section class="cta-form bg-dark">
        <div class="container text-center">
            <h3>Souscrire à notre newsletter!</h3>
            <hr class="colored">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <!-- Replace the form action in the line below with your MailChimp embed action! For more informatin on how to do this please visit the Docs! -->
                        <form role="form" action="//startbootstrap.us3.list-manage.com/subscribe/post?u=531af730d8629808bd96cf489&amp;id=afb284632f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div class="input-group input-group-lg">
                                <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Adresse Email...">
                                <span class="input-group-btn">
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Souscrire!</button>
                                </span>
                            </div>
                            <div id="mce-responses">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End MailChimp Signup Form -->
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contactez-nous</h2>
                    <hr class="colored">
                    <p> Partenaires, sponsors, fans ou autre vous pouvez nous contacter en remplissant notre formulaire de contact:</p>
                    <!--<p>Please tell us about your next project and we will let you know what we can do to help you.</p>-->
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Adresse Email</label>
                                <input type="email" class="form-control" placeholder="Adresse Email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Téléphone</label>
                                <input type="tel" class="form-control" placeholder="téléphone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-outline-dark">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <a href="https://www.youtube.com/channel/UCRGFxAYwNzTjlUApOS7sw3w" class="btn btn-block btn-full-width" target="_blank"><i class="fa fa-youtube fa-fw fa-2x"></i>S'ABONNER A ON S'EN BALUCHON MAINTENANT!</a>
    <footer class="footer" style="background-image: url('<?php echo base_url("assets/frontend/img/bg-header.jpg"); ?>')">
        <div class="container text-center">
            <div class="row">
               <!--<div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i> Call</h4>
                    <p>555-213-4567</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i> Visit</h4>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <p><a href="mailto:mail@example.com">contact_onsenbaluchon@gmail.com</a>
                    </p>
                </div>-->
            </div>
            <div class="row social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/onsenbaluchon" target="_blank"><i class="fa fa-facebook facebook2 fa-fw fa-2x"></i></a>
                        </li>
                        <li> 
                            <a href="https://www.youtube.com/channel/UCRGFxAYwNzTjlUApOS7sw3w" target="_blank"><i class="fa fa-youtube youtube2 fa-fw fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small">&copy; 2016 copyright, <a href="http://www.guiwebstudio.com/">GUIWEB STUDIO</a> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals on peut ajouter des commentaires dans la modal sur la vidéo visionnée, on envoi le message, la page d'acceuil se recharge
    et un message apparait en haut à droite pour signaler que le commentaire a bien été ajouté-->
    <!-- Example Modal 1 -->
    <?php foreach ($videos as $vid) { ?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $vid->id; ?>" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('<?php echo base_url("assets/frontend/img/portfolio/bg-1.jpg"); ?>')">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-8 col-lg-offset-2">
                                <!--<img src="<?php echo base_url('assets/frontend/img/logoonsenbaluchon.jpg'); ?>" class="img-responsive img-centered" alt="">-->
                                <h2><?php echo $vid->title; ?></h2>
                                <hr class="colored">
                                <p><?php echo $vid->synopsis; ?></p>
                            </div>

                            <div class="col-lg-10 col-lg-offset-1">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $vid->trailer; ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                     
                            <div class="col-lg-8 col-lg-offset-2">
                                <ul class="list-inline item-details">
                                    <li>Catégorie: <strong><?php echo $vid->cat_title; ?></strong>
                                    </li>
                                    <li>Date: <strong><?php echo $vid->videocreate; ?></strong>
                                    </li>
                                </ul>

                                <h3>Commentaires</h3>

                                <?php foreach($comments as $comment) { ?>

                                    <?php if ($vid->id === $comment->video_id) { ?>
                                        <div class="block-commentaire">
                                            <p class="commentaire">Auteur : <?php echo $comment->auteur; ?><br>
                                            Date :  Le <?php echo date("d/m/Y à H\hi", strtotime($comment->date_created)); ?><br>
                                            Commentaire : <?php echo $comment->content; ?></p>
                                        </div>
                                    <?php } ?>

                                <?php } ?>

                                <form action="<?php echo site_url('comments/creer/'.$vid->id); ?>" method="post">

                                    <div class="form-group">
                                        <label for="auteur">Votre nom</label>
                                        <input type="text" class="form-control" id="auteur" name="auteur" maxlength="200" autofocus required>
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Votre commentaire</label>
                                        <textarea class="form-control" rows="3" name="content" required maxlength="300"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-default">Envoyer</button>

                                </form>

                                 
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <!-- Core Scripts -->
    <script src="<?php echo base_url('assets/frontend/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/bootstrap/bootstrap.min.js'); ?>"></script>
    <!-- Plugin Scripts -->
    <script src="<?php echo base_url('assets/frontend/js/plugins/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/classie.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/cbpAnimatedHeader.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/owl-carousel/owl.carousel.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/background/core.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/background/transition.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/background/background.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/jquery.mixitup.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/contact_me.js'); ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/plugins/jqBootstrapValidation.js'); ?>"></script>

    <script src="<?php echo base_url('assets/frontend/js/notify.min.js'); ?>"></script>

    <?php 
        //je recupere mon message flash grace à ma clef de success message comme quoi le commentaire a bien été envoyé
        $message = $this->session->flashdata('success');

        if(!empty($message)){ ?>
            
            <script>

                $(function() {
                    $.notify("<?php echo $this->session->flashdata('success'); ?>", "success");
                }); 

            </script>

    <?php } ?>


    <!-- Vitality Theme Scripts -->
    <script src="<?php echo base_url('assets/frontend/js/vitality.js'); ?>"></script>
    <!-- on place la partie js apres le chargement de vitality.js  pour que la vidéo de presentation apparaisse à lécran, si l'on veut que la
    dernière vidéo réalisé apparaisse on décommente le bout de code, le model et controler ont déja le code écrit et inversement pour rajouter la vidéo de présentation-->
    <script>

        $(function() {
            // Formstone Background - Video Background Settings
            $("header.video").background({
                mute: false,
                autoplay : true,
                source: {
                     video: "http://www.youtube.com/v/<?php echo $dernierevideo->trailer; ?> ?version=3&enablejsapi=1",
                    //video: "https://www.youtube.com/embed/p657Y151xKI",//
                        }
                  
            });

            $("#play").click(function(){
                $("header.video").background("play");
            });

            $("#pause").click(function(){
                $("header.video").background("pause");
            });

          
            $("#mute").click(function(){
                $("header.video").background("mute");
            });

            //evenement avec la souris lorsque l on sort de l'élément header.video
            //cela met la video en pause et si on l on rentre dans lélément header.video
            // cela met la video en play.

            $("header.video").mouseout(function(){
                $("header.video").background("pause");
            });////

            $("header.video").mouseover(function(){
                $("header.video").background("play");
            });////
           

        }); 
        


    </script>

</body>

</html>
