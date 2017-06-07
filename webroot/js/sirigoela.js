$(function(){
    $('#myCarousel').carousel({
        interval: 10000
    });
    
    var qtd_ul = ($('.carousel-inner > .carousel-imgs').length) - 1;
    var carousel_ul = $('.carousel-inner > .carousel-imgs');
    var tamanho_li = $('.carousel-inner > .carousel-imgs').width();
    var proximo = undefined;
    var anterior = undefined;
    var atual = undefined;
    var idxAtual = 0;
    var trava_loop = false;
    var esquerda = 0;
    var direita = 0;
    var clicou = 0;

    if(qtd_ul >= 1){
    
        $('#anterior').on('click', function(e){
            e.preventDefault();
            carousel_ul.each(function(i, val){
                var active = $(this).attr('class').indexOf('active');
                if(clicou == 0){
                    var active = $(this).attr('class').indexOf('active');
                    var last = $(this).attr('class').indexOf('last');
                    if(active >= 0 && last >= 0){
                        $('.first').addClass('active');
                        $('.last').removeClass('active');
                        clicou = 1;
                    }else if(esquerda == qtd_ul){
                        $('.first').addClass('active');
                        $('.last').removeClass('active');
                        esquerda = 0;
                        clicou = 1;
                    }else if(active >= 0){
                        $(this).removeClass('active');
                        $(this).next().addClass('active');
                        esquerda++;
                        if(esquerda >= qtd_ul){
                            esquerda = qtd_ul;
                        }
                        clicou = 1;
                    }
                }
            });
            esquerda = 0;
            clicou = 0;
            
        });

        $('#proximo').on('click', function(e){
            e.preventDefault();
            carousel_ul.each(function(i, val){
                var active = $(this).attr('class').indexOf('active');
                var first = $(this).attr('class').indexOf('first');
                if(clicou == 0){
                    if(active >= 0 && first >= 0){
                        $('.last').addClass('active');
                        $('.first').removeClass('active');
                        clicou = 1;
                    }else if(direita == qtd_ul){
                        $('.first').addClass('active');
                        $('.last').removeClass('active');
                        direita = 0;
                        clicou = 1;
                    }else if(active >= 0){
                        $(this).removeClass('active');
                        $(this).prev().addClass('active');
                        clicou = 1;
                        direita++;
                    }
                }
            });
            direita = 0;
            clicou = 0;
            
        });

    }


});