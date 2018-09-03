 // function validarDatos() {
 // 	var variable = true;

 // 	if(!document.form.nombres.value){
 // 		alert("Debes escribir tus nombres");
 // 		document.form.Nombres.value.focus;
 // 		variable=false;
 // 	}

 // 	if (variable) {
 // 		document.form.submit();
 // 	}

 // 	window.onload=function(){
 // 		document.getElementById('boton').onclick=validarDatos;
 // 	}

 // } //Parentesis de cierre validarDatos()

  function busqueda() {
  // se declaran variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // busca en todas las filas de la tabla y oculta las que no coinciden con la busqueda
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
      } 
    }
  }

  function agregarCliente(){
   
      var url= 'conectar.php';
      $.ajax({
        type:'POST',
        url:url,
        data: $('#form').serialize(),

        success:function(dato){
        
          var valor = dato;
          
          if (valor==1){

            $('#form')[0].reset();

            $('#mensaje').addClass('mal').html('YA SE ENCUENTRE REGISTRADO!!!').show(200).delay(2500).hide(200);

            $('#mensaje').addClass('mal').html('DATOS YA INGRESADOS!!!!').show(200).delay(2500).hide(200);

            $('#mensaje').addClass('bien').html('SE GUARDO CORRECTAMENTE !!!').show(200).delay(2500).hide(200);
          
          return;
          
          }else{
          
            $('#form')[0].reset();
            $('#tabla-registro').html(dato);
            $('#mostrar-cliente').modal({
              show: true,
              backdrop: 'static'
            });
            return;
          }
        return false;
        }
          

      })

      return false;
  }

  