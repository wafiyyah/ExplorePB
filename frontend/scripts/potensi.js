    const modal2 = document.getElementById("popUp2");
    const btn2 = document.getElementById("PetaFasilitas");
    const span2 = document.getElementsByClassName("close2")[0];
  
    btn2.onclick = function() {
      modal2.style.display = "block";
    }
  
    span2.onclick = function() {
      modal2.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modal2) {
        modal2.style.display = "none";
      }
    }
  
      const modal = document.getElementById("popUp");
      const btn = document.getElementById("PetaLahan");
      const span = document.getElementsByClassName("close")[0];
  
      btn.onclick = function() {
        modal.style.display = "block";
      }
  
      span.onclick = function() {
        modal.style.display = "none";
      }
  
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
  