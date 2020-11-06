<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/05/2017
 * Time: 18:12
 */

//    session_start();

?>
    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right clearfix">
                        <div class="btn-group">
                            <ul class="dropdown-menu">
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <ul class="dropdown-menu">
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">   <?php if(isset($_SESSION['auth'])): ?>
                            <li><a href="/acconte"><i class="fa fa-user"></i> Compte</a></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li><a href="http://localhost/gceani/templates/compte/logout.php"><i class="fa fa-unlock"></i> Déconnecter</a></li>
                            <?php else: ?>
                            <li><a href="http://localhost/gceani/templates/compte/login.php"><i class="fa fa-lock"></i> Se Connecter</a></li>
                            <li><a href="http://localhost/gceani/templates/compte/inscrire.php"><i class="fa fa-lock"></i> Enregistrer</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->
<?php if(isset($_SESSION['auth'])): ?>
<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">

                        <li class="dropdown"><a href="http://localhost/gceani/index.php" class="active"> Dashbord <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="http://localhost/gceani/index.php">Information</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#">Déposer fichier<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="http://localhost/gceani/templates/preparation/prepa.php">déposer</a></li>
                                <li><a href="">Voir Fichier</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#">Traitement<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="http://localhost:8000/sacplastique/web/Sacs/consultation.php">Voir Traitement</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
<?php endif;?>
</header><!--/header-->
