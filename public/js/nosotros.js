document.addEventListener("DOMContentLoaded", function() {
    const nosotrosLink = document.querySelector("#nosotros-link");
    const nosotrosContainer = document.querySelector("#nosotros-container");
  
    nosotrosLink.addEventListener("click", function(event) {
      event.preventDefault();
      nosotrosContainer.scrollIntoView({ behavior: "smooth" });
    });
  });