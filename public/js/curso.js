document.addEventListener("DOMContentLoaded", function() {
    const cursolink = document.querySelector("#curso-link");
    const cursocontainer = document.querySelector("#curso-container");
  
    cursolink.addEventListener("click", function(event) {
      event.preventDefault();
      cursocontainer.scrollIntoView({ behavior: "smooth" });
    });
  });