<!-- Load CSS -->
<script>
    function loadCSS(hf) {
        var ms = document.createElement("link");
        ms.rel = "stylesheet";
        ms.href = hf;
        document.getElementsByTagName("body")[0].appendChild(ms);
    }
    loadCSS("/assets/css/app.css");
</script>

<!-- Load Scripts -->
<script>
    var scr = {
        "scripts": [
            {"src": "https://maps.googleapis.com/maps/api/js?key=AIzaSyC7nl04gTQl-ZBg0gjus9KGEEOKiczTW7o&callback=initMap", "async": true},
            {"src": "/bower_components/jquery/dist/jquery.min.js", "async": true},
            {"src": "/bower_components/jquery-migrate/jquery-migrate.min.js", "async": false},
            {"src": "/bower_components/perfect-scrollbar/js/perfect-scrollbar.min.js", "async": false},
            {"src": "/bower_components/slick-carousel/slick/slick.min.js", "async": false},
            {"src": "/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js", "async": false},
            {"src": "/bower_components/aos/dist/aos.js", "async": false},
            {"src": "/assets/js/app.js", "async": false}
        ]
    };
    !function (t, n, r) {
        "use strict";
        var c = function (t) {
            if ("[object Array]" !== Object.prototype.toString.call(t))return !1;
            for (var r = 0; r < t.length; r++) {
                var c = n.createElement("script"), e = t[r];
                c.src = e.src, c.async = e.async, n.body.appendChild(c)
            }
            return !0
        };
        t.addEventListener ? t.addEventListener("load", function () {
            c(r.scripts);
        }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
            c(r.scripts)
        }) : t.onload = function () {
            c(r.scripts)
        }
    }(window, document, scr);
</script>