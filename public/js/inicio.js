document.addEventListener("DOMContentLoaded", function() {
    const iniciolink = document.querySelector("#inicio-link");
    const iniciocontainer = document.querySelector("#inicio-container");
  
    iniciolink.addEventListener("click", function(event) {
      event.preventDefault();
      iniciocontainer.scrollIntoView({ behavior: "smooth" });
    });
  });