  function openNav() {
    var nav = document.getElementById("Sidenav");
    nav.style.width = "250px";
  }

  function closeNav() {
    document.getElementById("Sidenav").style.width = "0";
  }

  function validar() {
    var doce = document.getElementById('doce');

    var val = [
      document.getElementById('nome').value,
      document.getElementById('telefone').value,
      document.getElementById('endereco').value,
      document.getElementById('cidade').value,
      doce.options[doce.selectedIndex].value,
      document.getElementById('nome').value
    ] 

    console.log(val);
    
    // Valida se são nulos
    var aux;
    for (let i = 0; i < val.length; i++) {
      if (val[i] === "") {
          aux = true;
          break;
      }
    }
    // Modal
    if(!aux)
      var botao = document.getElementById('form-comprar').submit();
    else{
      var modal = document.getElementById('modal-compra');
      modal.classList.add('mostrar');
    }
  }

  function fecharModal(){
    var modal = document.getElementById('modal-compra');
    modal.classList.remove('mostrar');
  }
