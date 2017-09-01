<!-- load combined svg file (with symbols) into body-->
<script>
    (function (doc) {
        var scripts = doc.getElementsByTagName('script');
        var script = scripts[scripts.length - 1];
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            var div = doc.createElement('div');
            div.innerHTML = this.responseText;
            div.style.display = 'none';
            script.parentNode.insertBefore(div, script)
        };
        xhr.open('get', '/assets/img/sprite.svg', true);
        xhr.send()
    })(document)
</script>