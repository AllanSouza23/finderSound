// Envio do formulário local

$('#btnCadastroLocal').on({
  "click" : function() {
    var len = 6;
    var valid = true;
    for(var i = 0; i < len; i++){
      var input = [
        document.getElementById('proprietario').value,
        document.getElementById('tipo').value,
        document.getElementById('nomeLocal').value,
        document.getElementById('capacidadeLocal').value,
        document.getElementById('emailProprietario').value,
        document.getElementById('cidadeLocal').value,
        document.getElementById('telefoneLocal').value
      ];
      if (input[i] == "") {
        valid = false;
      }
    }
    if (valid){
      alert("Cadastro realizado com sucesso!");
    } 
    else { 
      alert('Por favor preencha todos os campos.');
     }
  }
});

// Envio formulário artista

$('#btnCadastroArtista').on({
  "click" : function() {
    var len = 4;
    var valid = true;
    for(var i = 0; i < len; i++){
      var input = [
        document.getElementById('artista').value,
        document.getElementById('genero').value,
        document.getElementById('emailArtista').value,
        document.getElementById('cidadeArtista').value,
        document.getElementById('telefoneLocal').value
      ];
      if (input[i] == "") {
        valid = false;
      }
    }
    if (valid){
      alert("Cadastro realizado com sucesso!");
    } 
    else { 
      alert('Por favor preencha todos os campos.');
     }
  }
});