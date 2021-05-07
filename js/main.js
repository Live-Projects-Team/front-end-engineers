var tabs = document.getElementsByClassName("nav-link");


document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {

        for (var i = 0; i < x.length; i++) {
            if (tabs[i].classList.contains("myaccount")) {
                if (window.scrollY > 50) {
                    document.getElementById('top_nav').style.display = "block";

                } else {
                    document.getElementById('top_nav').style.display = "none";

                }
            } else {
                document.getElementById('top_nav').style.display = "block";
            }
        }





    });
});



// DOMContentLoaded  end