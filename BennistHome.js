document.addEventListener("DOMContentLoaded", function() {
    var navLinks = document.querySelectorAll("nav a");
  
    for (var i = 0; i < navLinks.length; i++) {
      navLinks[i].addEventListener("click", function(event) {
        event.preventDefault();
        var targetId = this.getAttribute("href");
        var targetElement = document.querySelector(targetId);
        var targetOffsetTop = targetElement.offsetTop;
  
        window.scrollTo({
          top: BennistSocial,
          behavior: "smooth"
        });
      });
    }
  });
  