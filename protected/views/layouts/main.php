<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- blueprint CSS framework -->
   
	
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
        
         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/images/ico/apple-touch-icon-57-precomposed.png">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        

        <?php Yii::app()->bootstrap->register(); ?>    
        <?php
        $baseUrl = Yii::app()->request->baseUrl;
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
//        $cs->registerCoreScript('jquery.ui');
        $cs->registerScriptFile($baseUrl . '/js/jquery.js');
        $cs->registerScriptFile($baseUrl . '/js/bootstrap.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.isotope.min..js');
        $cs->registerScriptFile($baseUrl . '/js/gmaps.js');
        $cs->registerScriptFile($baseUrl . '/js/lightbox.min.js');
        $cs->registerScriptFile($baseUrl . '/js/validar_form.js');
        $cs->registerScriptFile($baseUrl . '/js/wow.min.js');
        $cs->registerScriptFile($baseUrl . '/js/main.js');
        ?>        
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "7e8eb33b-fbe0-4915-9b93-09490e3d10df", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <script>
        $(document).ready( function() {
             $('#yw0').removeClass('nav nav-pills').addClass('nav navbar-nav navbar-right');
        } );
    </script>
    <body>

        <header id="header">      
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 overflow">
                        <div class="social-icons pull-right">
                            <ul class="nav nav-pills">
                                <li><a href="https://www.facebook.com/casiingenierosuagrm" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="index.html">
                            <h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="logo"></h1>
                        </a>

                    </div>
                    <div class="collapse navbar-collapse">
                            <?php
                        $this->widget('bootstrap.widgets.TbNav', array(
                            'type' => TbHtml::NAV_TYPE_PILLS,
                            'items' => array(
                                array('label' => 'Inicio', 'class'=>'scroll' ,'url' => array('/site/index'),),                                                                
                                array('label' => 'Quienes Somos', 'class'=>'scroll' ,'url' => array( '/site/page', 'view' => 'about',),),
                                array('label' => 'Contactanos','class'=>'scroll' , 'url' => array('/site/contact'),),                                                                
                                array('label' => 'Galeria', 'class'=>'scroll' ,'url' => array('/site/galeria'),),                                                                
                                array('label' => 'Blog', 'class'=>'scroll' ,'url' => array('/site/blog'),),
//                                array('label' => 'Contactenos', 'url' => array('/site/contact'),),                                
//                                array('label' => 'Fotos', 'url' => array('/site/portfolio'),),                                
//                                array('label' => 'Servicios', 'url' => array('/site/services'),),                                
                            ),
                        ));
                        ?>
                    </div>
                    <div class="search">
                        <form role="form">
                            <i class="fa fa-search"></i>
                            <div class="field-toggle">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!--/#header-->

        <?php echo $content; ?>

        <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form action="sendemail.php" method="post" name="frm" onsubmit="return validarFormulario();">
                                            <div class="form-group has-feedback">                                                
                                                <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombres">
                                            </div>
                                            <div class="form-group has-feedback">                                                
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" id="subject" name="asunto" placeholder="Asunto">
                                            </div>
                                            <div class="form-group has-feedback">
                                                <textarea class="form-control" rows="6" id="message" name="mensaje" placeholder="Escriba su mensaje.."></textarea>                                                
                                            </div>
                                            <input type="submit" value="Enviar" class="btn btn-default">
                                        </form>
<!--                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php" onsubmit="return validarFormulario();">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <input type="subject" name="asunto" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="mensaje" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Enviar">
                            </div>
                        </form>-->
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2015. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.casiingenieros.com">Casi Ingenieros UAGRM</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
    </body>
</html>
