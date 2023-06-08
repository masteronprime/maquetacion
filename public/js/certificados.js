document.addEventListener("DOMContentLoaded", function() {
    const certificadoslink = document.querySelector("#certificados-link");
    const certificadoscontainer = document.querySelector("#certificados-container");
  
    certificadoslink.addEventListener("click", function(event) {
      event.preventDefault();
      certificadoscontainer.scrollIntoView({ behavior: "smooth" });
    });
  });