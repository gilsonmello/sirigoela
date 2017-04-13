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

    <?= $this->Html->css('main.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>

    <?= $this->Html->css('home.css') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <body>
        <!-- Header -->
        <div id="header">
            <img src="<?php echo BASE; ?>/img/logo.png" alt="" /></a>
            <h1>SiriGoela. Abrindo a boca de siri.</h1>
            <p>Deixe o siri ecoar sua marca e alcance um mar de clientes.
            <br /></p>
        </div>
        <?= $this->Flash->render() ?>
        <!-- Main -->
        <div id="main">
            <?= $this->fetch('content') ?>
        </div>
        <!-- Footer -->
        <div id="footer">
            <div class="container 75%">
                <header class="major last">
                    <h2>Quer saber mais?</h2>
                </header>

                <p>Aqui você pode tirar dúvidas ou solicitar um orçamento. Fique a vontade. A resposta é rápida!  </p>
                <?php echo $this->Form->create($contact) ?> 
                    <div class="row">
                        <div class="6u 12u(mobilep)">
                            <input class="" type="text" name="name" placeholder="Nome" />
                        </div>
                        <div class="6u 12u(mobilep) input text required">
                            <input class="" type="email" name="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <textarea name="description" placeholder="Mensagem" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <ul class="actions">
                                <li><input type="submit" value="enviar" /></li>
                            </ul>
                        </div>
                    </div>
                <?php echo $this->Form->end() ?>

                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                </ul>

                <ul class="copyright">
                    <li>&copy; SiriGoela. All rights reserved.</li>
                </ul>

            </div>
        </div>
        <!-- Scripts -->
        <script src="<?php echo BASE;?>/js/jquery.min.js"></script>
        <script src="<?php echo BASE;?>/js/jquery.validate.min.js"></script>
        <script src="<?php echo BASE;?>/js/skel.min.js"></script>
        <script src="<?php echo BASE;?>/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="<?php echo BASE;?>/js/main.js"></script>
        <script src="<?php echo BASE;?>/js/default.js"></script>
        
    </body>
</html>
