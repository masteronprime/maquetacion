document.addEventListener("DOMContentLoaded", function() {
    const aprenderlink = document.querySelector("#aprender-link");
    const aprendercontainer = document.querySelector("#aprender-container");
  
    aprenderlink.addEventListener("click", function(event) {
      event.preventDefault();
      aprendercontainer.scrollIntoView({ behavior: "smooth" });
    });
  });