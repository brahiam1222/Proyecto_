// $(document).ready(function(){

//     $('embolse').click(function(){
//         $("#contenido").load("embolse.php");

        
        // function modificar(){

        //     var cambiar = document.getElementById("cambio");
        //     console.log(cambiar);
        //     cambiar.textContent = "consultación"




        // }
        

        (function(){

            var validarNombre = function(e){

                if (formulario.name.value == 0) {
                    alert("el campo nombre es obligario");
                    e.preventDefault();
                    
                }
                
            }

            var validarRadio = function(e){

                if(formulario.genero[0].checked==false && formulario.genero[1].checked==false){
                    alert("Seleccione un genero");
                    e.preventDefault();

                }

                var validarTerminos = function(e){

                    if(formulario.terminos.checked == false){
                        alert("Seleccione un genero");
                        e.preventDefault();
                    }
                }


            }

            var validar = function(e){

                validarNombre(e);
                validarRadio(e);
                validarTerminos(e);
                
            }




            var formulario = document.getElementsByName("formulario")[0];
            formulario.addEventListener("submit", validar);





        }())
        
        
        
        
//     });
// });
    
