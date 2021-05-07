document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.getElementById('top_nav').style.display = "block";

        } else {
            document.getElementById('top_nav').style.display = "none";

        }
    });
});
// DOMContentLoaded  end