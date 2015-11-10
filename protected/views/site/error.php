<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">                                
                                    <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/404.png" alt="">  
                                </div>
                            </div>
                            <h2>PAGE NOT FOUND</h2>
                            <p>The page you are looking for might have been removed, had its name changed.</p>
                            <a href="<?php echo Yii::app()->createUrl('/site/index'); ?>" class="btn btn-error">RETURN TO THE HOMEPAGE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>