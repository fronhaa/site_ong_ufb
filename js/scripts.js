/*!
* Start Bootstrap - New Age v6.0.6 (https://startbootstrap.com/theme/new-age)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
*/
//
// Scripts
// 

$(document).ready(function () {
    // Activate Bootstrap scrollspy on the main nav element
    let mainNav = $('#mainNav');
    if (mainNav.length) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    }
    // Collapse responsive navbar when toggler is visible
    let navbarToggler = $('.navbar-toggler');
    let responsiveNavItems = $('#navbarResponsive .nav-link');
    responsiveNavItems.on('click', function () {
        if (navbarToggler.css('display') !== 'none') {
            navbarToggler.click();
        }
    });
});

const cell_1 = $("#cell_1");

$(document).ready(function () {
    setTimeout(function () {
        cell_1.addClass("visible_element_cell");
    }, 1000);
});

const cell_2 = $("#cell_2"), x_intro_2 = $(".x_intro_2"), circle_intro_2 = $(".circle_intro_2"), boli_intro_2 = $(".boli_intro_2");

$(window).on("scroll", function () {
    // Obtém a posição do elemento na página
    const elementPosition = cell_2.offset().top - 100;

    // Obtém a posição atual do scroll
    const scrollPosition = $(window).scrollTop();

    // Verifica se o elemento está visível na viewport
    if (scrollPosition >= elementPosition) {
        cell_2.addClass("visible_element_cell");
        x_intro_2.addClass("visible_element_x_1");
        circle_intro_2.addClass("visible_element_circle_2");
        boli_intro_2.addClass("visible_element_boli_2");
    }
});

$(window).on('load', function () {
    $('.fosco').hide();
    $('body').css('overflow', 'visible');
});

$('body').on('click', '.saiba_mais_verif', () => {
    $.alert({
        title: '<h2>VERIFICAÇÃO!!!</h2>',
        content: '<h3>Benefícios do verificado: </h3><p>1 - Ganhar selo de verificado. 2 - Maior confiabilidade. 3 - Acesso a recursos exclusivos. 4 - Reconhecimento. 5 - Divulgação na ONG.</p><br><h3>Aumentar as chances de ser verificado: </h3><p>1 - Adquirir o método de pagamento por recorencia de R$1 ao dia. 2 - Contribuir com a doação de tempo. 3 - Seja ativo na ONG. 4 - Oferecer sugestões inovadoras e criativas para aprimorar a presença online e física da ONG, contribuindo para a melhoria contínua da organização.</p>',
        theme: 'modern',
        columnClass: 'alert_verif',
        type: 'dark blue',
        buttons: {
            fechar: {
                isDisabled: false,
            }
        }
    });
})

$("body").on('change', '.radio_input', function () {
    if ($(this).is(":checked")) {
        valor_radio = $(".radio_input:checked").val();

        $.ajax({
            url: "../controllers/retornos_ajax.php",
            type: "POST",
            data: {
                valor_radio: valor_radio
            },
            beforeSend: function(){
                $('body').prepend('<div class="fosco"><div class="loader"><div></div></div></div>');
            },
            success: function (resposta) {
                console.log(resposta);
                $('.fosco').remove();
            },
            error: function () {
                alert('Algo deu errado, aguarde alguns minutos e tente novamente!');
                $('.fosco').remove();
            }
        });
    }
});

$("body").on('click', '#radio_beneficiario', function () {
    if ($(this).is(":checked")) {
        $('.form-floating').eq(4).html('<textarea required class="form-control" id="message" name="message" type="text" placeholder="Sou bom em comunicação com pessoas." style="height: 10rem" data-sb-validations="required"></textarea><label id="lable_suas" for="message">Suas necessidades</label><div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>')
    } else {
        event.preventDefault();
    }
});

$("body").on('click', '#radio_voluntario', function () {
    if ($(this).is(":checked")) {
        $('.form-floating').eq(4).html('<textarea required class="form-control" id="message" name="message" type="text" placeholder="Sou bom em comunicação com pessoas." style="height: 10rem" data-sb-validations="required"></textarea><label id="lable_suas" for="message">Suas habilidades</label><div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>')
    } else {
        event.preventDefault();
    }
});



$('body').on('click', '#button_vamos_la', function(){
    /* if($('#name').val() != '' && $('#cpf').val() != '' && $('#email').val() != '' && $('#message').val() != '' && $('#phone').val() != ''){  */
        $('.d-grid').html('<button class="btn btn-primary rounded-pill btn-lg" id="submitButton">Finalizar</button>');
        $('.form-floating').css('display', 'none');
        $('.radio_cadastro').css('display', 'none');
        $('#contactForm').prepend('<div style="display: flex;" id="seta_aviso"><i class="bi bi-arrow-left seta_voltar"></i><div id="aviso_senha"><p>Crie uma senha de acesso</p></div></div><div class="form-floating mb-3 senhas"><input type="password" required class="form-control" id="senha1" name="senha1" placeholder="@dR$23#D" data-sb-validations="required"><label for="senha1">Senha</label></div><div class="form-floating mb-3 senhas"><input type="password" required class="form-control" id="senha2" name="senha2" placeholder="@dR$23#D" data-sb-validations="required"><label for="senha2">Confirmar senha</label></div>');
    /* }else{
      alert('Algum campo está vazio!!')
    } */
});

$('body').on('click', '#submitButton', function(){
    if($('#senha1').val() == $('#senha2').val()){
        $(this).submit('#contactForm');
    }else{
        $.alert({
            title: '<h2>SENHAS NÃO COINCIDEM!</h2>',
            content: '',
            theme: 'modern',
            type: 'red',
            buttons: {
                fechar: {
                    isDisabled: false,
                }
            }
        });
        return false;
    }
});

$('body').on('click', '.seta_voltar', function(){
    $('.form-floating').css('display', 'block');
    $('.radio_cadastro').css('display', 'flex');
    $('.d-grid').html('<button class="btn btn-primary rounded-pill btn-lg" id="button_vamos_la" type="button">Vamos lá</button>');
    $('#seta_aviso').remove();
    $('.senhas').remove();
});