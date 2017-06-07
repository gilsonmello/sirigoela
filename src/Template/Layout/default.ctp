<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ? $title : "SiriGoela" ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <?php //echo $this->Html->css('main.css') ?>
    <?php //echo $this->Html->css('font-awesome.min.css') ?>

    <?php //echo $this->Html->css('home.css') ?>

    <link media="all" rel="stylesheet" href="<?php echo BASE;?>/css/sirigoela.css"/> 
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <body>
        <div class="main">
            <div class="topo topo-home">
                <div class="topo-fundo">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 pull-left">
                                <div class="logo">
                                    <img class="img-responsive" src="<?php echo BASE;?>/novo_layout/logo.png">
                                </div>
                            </div>
                            <div class="col-md-2 pull-right">
                                <div class="rede-social">
                                    <img class="img-responsive" src="<?php echo BASE;?>/novo_layout/face.png">
                                    <img class="img-responsive" src="<?php echo BASE;?>/novo_layout/insta.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container missao-sirigoela">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="">
                                <p>SIRIGOELA. </p><p>ABRINDO A BOCA DE SIRI</p>
                            </h1>
                            <h2>
                                <p>MANTER A BOCA FECHADA É PARA</p> 
                                <p>QUEM TEM MEDO DO SUCESSO. </p>
                                <p>ESPALHE O MELHOR QUE TEM</p>
                                <p>A OFERECER.</p>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container projetos">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive img-center" src="<?php echo BASE;?>/novo_layout/lampada.png">
                        <h2 class="text-center">MARKETING DIGITAL & SOCIAL MEDIA</h2>
                        <h5 class="text-center">
                            Google, Facebook e Instagram. Preparamos tudo para o seu sucesso nas buscas e redes sociais.
                        </h5>
                    </div>

                    <div class="col-md-4">
                        <img class="img-responsive img-center" src="<?php echo BASE;?>/novo_layout/pc.png">
                        <h2 class="text-center">WEB DESIGN & DESENVOLVIMENTO</h2>
                        <h5 class="text-center">
                            Sites e manutenção de sistemas. Desenvolvemos a solução ideal para o seu negócio na web.
                        </h5>
                    </div>

                    <div class="col-md-4">
                        <img class="img-responsive img-center" src="<?php echo BASE;?>/novo_layout/folder.png">
                        <h2 class="text-center">DESIGN GRÁFICO & IMPRESSOS</h2>
                        <h5 class="text-center">
                            Construimos juntos a sua marca e entregamos todo material que necessita.
                        </h5>
                    </div>
                </div>
            </div>

            <div class="container carrossel">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive"  src="<?php echo BASE;?>/novo_layout/genno.jpg" alt="Los Angeles">
                            </div>

                            <div class="item active">
                                <img class="img-responsive" src="<?php echo BASE;?>/novo_layout/caio.jpg" alt="Chicago">
                            </div>
                        
                            <div class="item active">
                                <img class="img-responsive"  src="<?php echo BASE;?>/novo_layout/ludmila.jpg" alt="New york">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- Scripts -->
        <script src="<?php echo BASE;?>/js/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE;?>/js/jquery.validate.min.js"></script>
        <script src="<?php echo BASE;?>/js/skel.min.js"></script>
        <script src="<?php echo BASE;?>/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="<?php echo BASE;?>/js/main.js"></script>
        <script src="<?php echo BASE;?>/js/default.js"></script>
        
    </body>
</html>
