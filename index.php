<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
	<link rel="stylesheet" href="estilos.css">
    <title>FUEC</title>  
  </head>
  <body>
     <!-- NAVIGATION  -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">FUEC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
      </div>
    </nav>
     <!-- Body  -->
    <div style="height: 30px;"></div>
    <div class="container"  >
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header" >FORMATO ÚNICO DE EXTRACTO DE CONTROL DE SERVICIO PÚBLICO DE TRANSPORTE TERRESTRE AUTOMOTOR ESPECIAL</div>
        <div class="card-body">
        <form id="form1" action="procesar.php" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                    




                  <div class="container">

<hr class="my-4">

<div class="row mb-3">
  <div class="col-md-8 themed-grid-col">
    <div class="pb-3">
     
    <div class="col-md-12 mb-3">
                      
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="N° FUEC" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>

    </div>
    <div class="row">
      <div class="col-md-6 themed-grid-col">Razón Social: 
      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
      </div>

      <div class="col-md-6 themed-grid-col">NIT:
      <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>


    <div class="row">
      <div class="col-md-12 themed-grid-col">Contrato Número:
      <input name="direccion" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
  
    </div>


    <div class="row">
      <div class="col-md-12 themed-grid-col">Contratatante:
      <input name="direccion" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
     
    </div>


    <div class="row">
      <div class="col-md-6 themed-grid-col">Objeto Contrato:
      <input name="direccion" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>


      <div class="col-md-6 themed-grid-col">CC/NIT:

      <input name="direccion" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12 themed-grid-col">Origen:
      <input name="usuario" type="text" class="form-control" id="usuario" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
      </div>
    </div>


    <div class="row">
      <div class="col-md-12 themed-grid-col">Descripción del Recorrido:
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>
                      <div class="valid-feedback">¡Aceptado!</div>
      </div>

    </div>

    <!-- Fin Tabla  -->
  </div>

</div>

<hr class="my-4">

</div>


















                  
                  
                  
                 
                  <button class="btn btn-lg btn-secondary" type="submit">Enviar</button>
                </form>
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="codigo.js"></script> 	  	
  </body>
</html>