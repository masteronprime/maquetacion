document.addEventListener("DOMContentLoaded", function() {
    const nosotrosLink2 = document.querySelector("#nosotros2-link");
    const nosotrosContainer = document.querySelector("#nosotros-container");
  
    nosotrosLink2.addEventListener("click", function(event) {
      event.preventDefault();
      nosotrosContainer.scrollIntoView({ behavior: "smooth" });
    });
  });