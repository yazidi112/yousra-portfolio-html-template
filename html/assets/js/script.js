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
    var theme = localStorage.getItem("theme");
    if (theme === null) {
        localStorage.setItem("theme", "light");
    } else {
        selectModeStyle.setAttribute("href", "assets/css/" + theme + "-style.css");
        selectColorStyle.setAttribute("href", "assets/css/" + theme + "-red.css");
    }
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
            if (localStorage.getItem("theme") == 'light') {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }
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