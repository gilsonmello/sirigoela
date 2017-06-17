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
        <?= $title ? $title : "SiriGoela" ?>
        <?php //echo $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <?php //echo $this->Html->css('main.css') ?>
    <?php //echo $this->Html->css('font-awesome.min.css') ?>

    <?php //echo $this->Html->css('home.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,900" rel="stylesheet">

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
                                    <a href="<?php echo BASE;?>">
                                        <img class="img-responsive" src="<?php echo BASE;?>/novo_layout/logo.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 pull-right">
                                <div class="rede-social">
                                    <a href="<?php echo BASE;?>">
                                        <img class="img-responsive" src="<?php echo BASE;?>/novo_layout/face.png">
                                    </a>
                                    <a href="<?php echo BASE;?>">
                                        <img class="img-responsive" src="<?php echo BASE;?>/novo_layout/insta.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mission-sirigoela">
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

            <div class="container projects">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive img-center" src="<?php echo BASE;?>/novo_layout/lampada.png">
                        <h3 class="text-center gray">MARKETING DIGITAL & SOCIAL MEDIA</h3>
                        <h4 class="text-center gray-light">
                            Google, Facebook e Instagram. Preparamos tudo para o seu sucesso nas buscas e redes sociais.
                        </h4>
                    </div>

                    <div class="col-md-4">
                        <img class="img-responsive img-center" src="<?php echo BASE;?>/novo_layout/pc.png">
                        <h3 class="text-center gray">WEB DESIGN & DESENVOLVIMENTO</h3>
                        <h4 class="text-center gray-light">
                            Sites e manutenção de sistemas. Desenvolvemos a solução ideal para o seu negócio na web.
                        </h4>
                    </div>

                    <div class="col-md-4">
                        <img class="img-responsive img-center" src="<?php echo BASE;?>/novo_layout/folder.png">
                        <h3 class="text-center gray">DESIGN GRÁFICO & IMPRESSOS&nbsp;</h3>
                        <h4 class="text-center gray-light">
                            Construimos juntos a sua marca e entregamos todo material que necessita.
                        </h4>
                    </div>
                </div>
            </div>

            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-imgs active first">
                        <div class="img-block">
                            <div class="col-xs-12 col-md-12">
                                <a href="#">
                                    <img src="<?php echo BASE;?>/novo_layout/genno.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="img-block">
                            <div class="col-xs-12 col-md-12">
                                <a href="#">
                                    <img src="<?php echo BASE;?>/novo_layout/caio.jpg" class="img-responsive">
                                </a>
                            </div>
                            
                        </div>
                        <div class="img-block">
                            <div class="col-xs-12 col-md-12">
                                <a href="#">
                                    <img src="<?php echo BASE;?>/novo_layout/ludmila.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="img-block">
                            <div class="col-xs-12 col-md-12">
                                <a href="#">
                                    <img src="<?php echo BASE;?>/novo_layout/jessica.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="img-block">
                            <div class="col-xs-12 col-md-12">
                                <a href="#">
                                    <img src="<?php echo BASE;?>/novo_layout/galpon.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#" id="anterior">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#" id="proximo">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> 
            </div>

            <div class="footer">
                <div class="background-footer">
                        <div class="row">
                                <div class="col-sm-5 col-md-5 col-xs-12">
                                    <a href="<?php echo BASE;?>" class="logo_footer pull-right">
                                        <img src="<?php echo BASE;?>/novo_layout/logo_rodape.png" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-sm-7 col-md-7 col-xs-12">
                                    <div class="description-footer">
                                        <h3>SiriGoela - Agência Digital</h3>
                                        <h5>
                                            <img src="<?php echo BASE;?>/novo_layout/email.png">
                                            &nbsp;atendimento@sirigoela.com.br
                                        </h5>
                                        <h5>
                                            <img src="<?php echo BASE;?>/novo_layout/whats.png">
                                            &nbsp;71 98783-0432
                                        </h5>
                                    </div>
                                </div>
                            <!-- <div class="col-md-6">
                                <div class="row">
                                    <h3>Sirigoela - Agência Digital</h3>
                                </div>
                                <div class="row">
                                    <img src="<?php echo BASE;?>/novo_layout/email.png">
                                    <label>&nbsp;atendimento@sirigoela.com.br</label>
                                </div>
                                <div class="row">
                                    <img src="<?php echo BASE;?>/novo_layout/whats.png">
                                    <label>&nbsp;71 98783-0432</label>
                                </div>
                            </div> -->
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
        <script src="<?php echo BASE;?>/js/sirigoela.js"></script>
        <script src="<?php echo BASE;?>/js/default.js"></script>
        
    </body>
</html>
