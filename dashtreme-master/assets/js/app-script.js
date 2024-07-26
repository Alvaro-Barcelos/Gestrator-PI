const iconMenu = document.querySelector('.switcher-icon');

$(function() {
    "use strict";

    // Recupera o tema salvo do localStorage e aplica-o
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        $('body').attr('class', savedTheme);
    }

    // sidebar menu js
    $.sidebarMenu($('.sidebar-menu'));

    // === toggle-menu js
    $(".toggle-menu").on("click", function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        
        // Verifica se a classe 'toggled' foi adicionada ou removida
        if ($("#wrapper").hasClass("toggled")) {
            iconMenu.style.display = 'none';
        } else {
            iconMenu.style.display = 'block';
        }
    });

    // === sidebar menu activation js
    $(function() {
        for (var i = window.location, o = $(".sidebar-menu a").filter(function() {
            return this.href == i;
        }).addClass("active").parent().addClass("active"); ;) {
            if (!o.is("li")) break;
            o = o.parent().addClass("in").parent().addClass("active");
        }
    });

    /* Top Header */
    $(document).ready(function(){ 
        $(window).on("scroll", function(){ 
            if ($(this).scrollTop() > 60) { 
                $('.topbar-nav .navbar').addClass('bg-dark'); 
            } else { 
                $('.topbar-nav .navbar').removeClass('bg-dark'); 
            } 
        });
    });

    /* Back To Top */
    $(document).ready(function(){ 
        $(window).on("scroll", function(){ 
            if ($(this).scrollTop() > 300) { 
                $('.back-to-top').fadeIn(); 
            } else { 
                $('.back-to-top').fadeOut(); 
            } 
        }); 

        $('.back-to-top').on("click", function(){ 
            $("html, body").animate({ scrollTop: 0 }, 600); 
            return false; 
        }); 
    });

    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    // theme setting
    $(".switcher-icon").on("click", function(e) {
        e.preventDefault();
        $(".right-sidebar").toggleClass("right-toggled");
        iconMenu.style.display = 'block';
    });

    $('#theme1').click(theme1);
    $('#theme2').click(theme2);

    function theme1() {
        const themeClass = 'bg-theme bg-theme2';
        $('body').attr('class', themeClass);
        localStorage.setItem('theme', themeClass);  // Salva o tema no localStorage
    }

    function theme2() {
        const themeClass = 'bg-theme bg-theme1';
        $('body').attr('class', themeClass);
        localStorage.setItem('theme', themeClass);  // Salva o tema no localStorage
    }
});
