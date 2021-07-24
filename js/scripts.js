/*!
    * Start Bootstrap - Freelancer v6.0.0 (https://startbootstrap.com/themes/freelancer)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-freelancer/blob/master/LICENSE)
    */
    (function($) {
    "use strict"; // Start of use strict
  
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 71)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
  
    // Scroll to top button appear
    $(document).scroll(function() {
      var scrollDistance = $(this).scrollTop();
      if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
      } else {
        $('.scroll-to-top').fadeOut();
      }
    });
  
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 80
    });
  
    // Collapse Navbar
    var navbarCollapse = function() {
      if ($("#mainNav").offset().top > 100) {
        $("#mainNav").addClass("navbar-shrink");
      } else {
        $("#mainNav").removeClass("navbar-shrink");
      }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
  
    // Floating label headings for the contact form
    $(function() {
      $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
      }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
      }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
      });
    });
  
  })(jQuery); // End of use strict


//pøidaní eventu ke tlaèítkùm v portfoliu
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        /* najití vsech rozklikávacích tlacitek */
        this.classList.toggle("active");

        /* prepinani vyditelnosti rozepsaného textu */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}


/// funkce k zobrazení vyskakovaciho okna
function OverleyOn(ID) {
    document.getElementById(ID).style.display = "block";
}

/// funkce k zavøení vyskakovaciho okna
function OverleyOff(ID) {
    document.getElementById(ID).style.display = "none";
}

function showIMG(ID1, ID2) {
    if (document.getElementById(ID1).style.display === "none") {
        OverleyOn(ID1);
        OverleyOff(ID2);
        a = document.getElementsByClassName("img-web-btn")
        for (var i = 0; i < a.length; i++) {
            a[i].innerHTML = "PREDCHOZI"
        }


    }
    else {
        OverleyOff(ID1);
        OverleyOn(ID2);
        a= document.getElementsByClassName("img-web-btn")
        for (var i = 0; i < a.length; i++) {
            a[i].innerHTML = "DALSI"
        }
        
    }
}

function IframeOrIMG(imgID, iframeID) {
    document.getElementById(imgID).style.display = "none"
    document.getElementById(iframeID).style.display = "block"
}