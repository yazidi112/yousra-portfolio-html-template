Yousra Template 1.0.0
---------------

[![](img/logo.png)](#)

*   [Overview](#)
*   [Features](#features-section)
*   [Fonts](#fonts-section)
*   [Icons](#icons-section)
*   [JS & CSS libraries](#libraries-section)
*   [JS & CSS initialisation](#css-initialisation-section)
*   [HTML Structure](#html-structure-section)
*   [CSS Structure](#css-structure-section)
*   [JS Script](#js-section)

Yousra Template 
-------------------------------

You will need some knowledge of HTML/CSS to edit this theme.

![](img/hero.png)

Features
--------

Yousra template is a modern portfolio template created with latest web technologies. Its features are:

*   Dark & Light Theme
*   Fully Responsive Design
*   Unlimited Color Option
*   W3C Validator
*   Clean Code
*   Speed
*   Accessibility
*   Seo
*   Free Google Font
*   Browser Compatibility

Fonts
-----

We used two beautiful Google fonts, Montserrat and Nunito. We applied first font in body tag and we applied second in all H tags from h1 to h6. If you want to edit them open \_typography.scss file. fore more informations please visit:

*   Montserrat: [https://fonts.google.com/specimen/Montserrat](https://fonts.google.com/specimen/Montserrat)
*   Nunito: [https://fonts.google.com/specimen/Nunito](https://fonts.google.com/specimen/Nunito)

To use these fonts in our template, we added these links in the head tag like this:

                            `<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap">`                           
                        

Icons
-----

We used the latest version of the famous icon framework: Font Awesome 6. Open the link below to view all icons and use whatever you want on your website.

*   Font Awesome Free 6.X: [https://fontawesome.com/icons](https://fontawesome.com/icons)

To use it in our template we added this link tag in the head tag like that:

                            `<link rel="stylesheet" href="assets/css/fontawesome.css">`
                            
                        

JS & CSS libraries
------------------

To have an awesome template we used two strong and famous libraries: Bootstrap 5 and Isotope. Please visit the officials websites to get more informations:

*   Bootstrap 5.X [https://getbootstrap.com/docs/5.1/getting-started/introduction/](https://getbootstrap.com/docs/5.1/getting-started/introduction/)
*   Isotope: [https://isotope.metafizzy.co/](https://isotope.metafizzy.co/)

JS & CSS initialisation
-----------------------

In the head tag we initialized all the css files and at the end of the body tag we initialized all the javascript files

### Css Initialisation

                        `<!-- Css Style --> <link rel="stylesheet" href="assets/css/bootstrap.min.css"> <link rel="stylesheet" href="assets/css/fontawesome.css"> <!-- Custom Style Css --> <link rel="stylesheet" href="assets/css/light-style.css" id="select-mode-style"> <link rel="stylesheet" href="assets/css/light-red.css" id="select-color-style"> <!-- Google Fonts --> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap">`
                        

### JS Initialisation

    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/script.js"></script>
    

HTML Structure
--------------

this template is composed with one header,one nav, one footer and seven sections and they are organised like that:

1.  Html
    1.  Head
        1.  Metas
        2.  Css Style
    2.  Body
        1.  Nav
        2.  Header
        3.  About section
        4.  Service Section
        5.  Portfolio section
        6.  Team section
        7.  Testimonials section
        8.  Blog section
        9.  Contact section
        10.  Footer section
        11.  JS Initialisation

CSS structure
-------------

In order to facilitate and organize the use of the CSS style, we have chosen the SASS language and we have produced two css files, each file has a theme, the Dark and Light themes:

*   dark-style.css
*   light-style.css

We have also produced 12 css files to customize the colors:

*   dark-orange.css
*   dark-blue.css
*   dark-purple.css
*   dark-red.css
*   dark-yellow.css
*   dark-green.css
*   light-orange.css
*   light-blue.css
*   light-purple.css
*   light-red.css
*   light-yellow.css
*   light-green.css

In both of our style's link tags, we've assigned IDs to use with JavaScript to switch between themes and color styles. At the end of the page in the footer section you will find a button that allows you to switch between themes and colors and its Javascript code is in the script.js file

    
        <link rel="stylesheet" href="assets/css/light-style.css" id="select-mode-style">
        <link rel="stylesheet" href="assets/css/light-red.css" id="select-color-style">
    

Here is the content of the two files light-style.scss and dark-style.css which allows to generate the file successively light-style.css and dark-syle.csss

*   light-style.scss
    
        
        /*
        Template Name: Yousra
        Author: YAZIDI Imran
        Email: yazidi.imran@gmail.com
        Mode : LIGHT THEME
        */
        
        @import "variables";
        @import "mixins";
        @import "typography";
        @import "buttons";
        @import "helpers";
        @import "navbar";
        @import "header";
        @import "about";
        @import "services";
        @import "testimonials";
        @import "portfolio";
        @import "team";
        @import "blog";
        @import "contact";
        @import "footer";
        @import "themes/light-theme";
        
    
*   dark-style.scss:
    
        
        /*
        Template Name: Yousra
        Author: YAZIDI Imran
        Email: yazidi.imran@gmail.com
        Mode : DARK THEME
        */
        
        @import "variables";
        @import "mixins";
        @import "typography";
        @import "buttons";
        @import "helpers";
        @import "navbar";
        @import "header";
        @import "about";
        @import "services";
        @import "testimonials";
        @import "portfolio";
        @import "team";
        @import "blog";
        @import "contact";
        @import "footer";
        @import "themes/dark-theme";
        
    

The two files have almost the same code except for the part of the colors which is different, each theme has its own colors.

Here is an example of a SASS file that generates the dark-red.css file. and the same for the other files.

dark-red.scss:

    
    @import "../variables";
    @import "../mixins";
    @include setColor($dark-red);
    

JS Script
---------

We have tried to use the minimum amount of Javascript code so that the website using this theme is fast and efficient. In the end, we got the code below.

    
    /*
    Template Name: Yousra
    Author: YAZIDI Imran
    Email: yazidi.imran@gmail.com 
    */
    
    /*===========================
        On window Load
    =============================*/
    window.onload = function() {
        /*================================================================================
            Theme Switcher
        ==================================================================================*/
    
        var selectModeStyle = document.querySelector("#select-mode-style");
        var selectColorStyle = document.querySelector("#select-color-style");
        var lightClass = document.querySelectorAll(".light");
        var darkClass = document.querySelectorAll(".dark");
        document.querySelectorAll(".theme-btn").forEach(function(themeBtn) {
            themeBtn.addEventListener("click", function(e) {
                e.preventDefault();
                darkClass.forEach(function(element) {
                    element.classList.toggle("d-none");
                });
                lightClass.forEach(function(element) {
                    element.classList.toggle("d-none");
                });
                selectModeStyle.setAttribute("href", this.dataset.mode);
                selectColorStyle.setAttribute("href", this.dataset.color);
            });
        });
    
        /*================================================================================
            Porftolio filtered with Isotope library      
        ==================================================================================*/
    
        var portfolioFilterLinks = document.querySelectorAll("#portfolio-menu-filter a");
        var iso = new Isotope(".portfolio-filter", {
            filter: '*',
            itemSelector: '.work_item',
            layoutMode: "masonry",
            animationOptions: { duration: 750, easing: "linear" }
        });
        portfolioFilterLinks.forEach(function(element) {
            element.addEventListener("click", function(e) {
                e.preventDefault();
                portfolioFilterLinks.forEach(function(link) {
                    link.classList.remove("active");
                });
                element.classList.add("active");
                var dataFilter = element.getAttribute("data-filter");
                iso.arrange({ filter: dataFilter });
            });
        });
        /*===============================================================================
            TYPE WRITER
        ================================================================================*/
        var TypeWriter = function(selector, options) {
            this.selector = selector;
            this.speed = options.speed;
        };
    
        TypeWriter.prototype.type = function() {
            var self = this;
            var step = 0;
            var text = this.selector.innerText;
            this.selector.innerText = "";
    
            var interval = setInterval(function() {
                if (step < text.length) {
                    self.selector.innerHTML = self.selector.innerHTML + text.charAt(step);
                    step++;
                } else {
                    clearInterval(interval);
                }
            }, this.speed);
    
        };
        var element = document.querySelector("header h1");
        var typeWriter = new TypeWriter(element, { speed: 50 });
        typeWriter.type();
    };
    /*===========================
        On window Scroll
    =============================*/
    window.onscroll = function() {
        if (window.pageYOffset >= 50)
            document.querySelector(".custom-nav").classList.remove("p-3");
        else
            document.querySelector(".custom-nav").classList.add("p-3");
    
        if (window.pageYOffset > 100)
            document.querySelector(".back-top").style.display = "block";
        else
            document.querySelector(".back-top").style.display = "none";
    };
    

If you have any questions feel free to ask me through comment section on ThemeForest.

 
