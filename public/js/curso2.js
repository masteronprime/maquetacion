document.addEventListener("DOMContentLoaded", function() {
    const cursolink2 = document.querySelector("#curso2-link");
    const cursocontainer = document.querySelector("#curso-container");
  
    cursolink2.addEventListener("click", function(event) {
      event.preventDefault();
      cursocontainer.scrollIntoView({ behavior: "smooth" });
    });
  });