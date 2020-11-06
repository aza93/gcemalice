<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/05/2017
 * Time: 18:12
 */

?>
<div class="header_top"><!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-phone"></i>  01.69.91.69.36</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i> a.boussadia@animalis.fr</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header_top-->

<?php
;
if($session = Session::getInstance()->hasFlash()):
    foreach ($session = Session::getInstance()->getFlash() as $type => $mess):
        ?> <div class="alert alert-<?= $type;?>"> <?= $mess; ?> </div>
    <?php
    endforeach;
endif;
