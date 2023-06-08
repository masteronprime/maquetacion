document.addEventListener("DOMContentLoaded", function() {
    const inicio2link = document.querySelector("#inicio2-link");
    const aprendercontainer = document.querySelector("#inicio-container");
  
    inicio2link.addEventListener("click", function(event) {
      event.preventDefault();
      aprendercontainer.scrollIntoView({ behavior: "smooth" });
    });
  });