document.addEventListener("DOMContentLoaded", function() {
    var breadcrumb = document.querySelector('.breadcrumb-item');
    if (breadcrumb) {
        var links = breadcrumb.getElementsByTagName('a');
        for (var i = 0; i < links.length; i++) {
            var href = links[i].getAttribute('href');
            if (href === "tipos.php") { 
                links[i].parentNode.classList.add('selected');
            }
        }
    }
});