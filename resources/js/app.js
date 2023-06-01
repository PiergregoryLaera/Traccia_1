import './bootstrap';
import 'bootstrap/dist/js/bootstrap.min.js';


document.getElementById("formSearchButton").addEventListener("click", function(event) {
    event.preventDefault(); // Previene l'invio del form
  
    var comuneInput = document.getElementById("comuneInput").value;
    
    // Effettua la validazione
    if (comuneInput.trim() === "") {
      alert("Ci dispiace la tua città non è stata riconosciuta");
      return;
    }
    
    // Effettua la ricerca o altre azioni necessarie
    // ...
  });
  