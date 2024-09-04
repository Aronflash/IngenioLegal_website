
  // Hacer el cuadro flotante movible
  dragElement(document.getElementById("visitas-cuadro"));

  function dragElement(elmnt) {
      var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
      if (document.getElementById(elmnt.id + "-header")) {
          /* si hay un encabezado para el cuadro, muévelo desde allí */
          document.getElementById(elmnt.id + "-header").onmousedown = dragMouseDown;
      } else {
          /* de lo contrario, mueve el cuadro desde cualquier parte dentro de él */
          elmnt.onmousedown = dragMouseDown;
      }

      function dragMouseDown(e) {
          e = e || window.event;
          e.preventDefault();
          // obtener la posición del cursor al inicio
          pos3 = e.clientX;
          pos4 = e.clientY;
          document.onmouseup = closeDragElement;
          // llamar a una función cada vez que el cursor se mueve
          document.onmousemove = elementDrag;
      }

      function elementDrag(e) {
          e = e || window.event;
          e.preventDefault();
          // calcular la nueva posición del cursor
          pos1 = pos3 - e.clientX;
          pos2 = pos4 - e.clientY;
          pos3 = e.clientX;
          pos4 = e.clientY;
          // establecer la nueva posición del cuadro
          elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
          elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
      }

      function closeDragElement() {
          // parar de mover el cuadro cuando se suelta el mouse
          document.onmouseup = null;
          document.onmousemove = null;
      }
  }
