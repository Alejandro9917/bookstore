<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/estilosi.css">
      <link rel="stylesheet" href="css/estilosPa.css">
      <title>Portal de pago-Bookstore</title>
  </head>

  <body>
      <!--Barra de navegación-->
        <?php
            include_once("recursos/navbar.php");
        ?>

        <!--A partir de acá comienza el cuerpo de la página-->
        <main>
            <div id="img-info">
                <img class="img-fluid d-block mx-auto" src="img/User-info.png" alt="Usuario Información" width="140px" height="140px" >
         </div>
          <h5 class="text-center">1.Información de contacto</h5>
          <hr size=4 noshade="noshade">

          
          
                <div class="row d-flex justify-content-center">
                   
                    <div class="col-6 col-sm-5">
                        <label class="Nom" for="Nombres">Nombres</label>
                        <input type="text" class="form-control Nom-txt">
                    </div>

                    <div class="col-6 col-sm-5">
                        <label class="Apell" for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control Apell-txt" >
                    </div>

                    <div class="col-6 col-sm-5">
                        <label class="email" for="correo">Corro electrónico</label>
                        <input type="text" class="form-control email-txt">
                    </div>

                    <div class="col-6 col-sm-5">
                        <label class="tel" for="Telefono">N° de teléfono</label>
                        <input type="text" class="form-control Num-txt" >
                    </div>                    
              </div>

                     <div class="lb"><label for="">Dirección exacta</label></div>
                     <div class="txta">
                         <textarea  placeholder="Escribir dirección"></textarea>
                     </div>
                  
             
            
   

            <div class="Pago">
                <h5 class="text-center">2.Forma de pago</h5>
                <hr size=4 noshade="noshade">

                <p class="cash text-center"><img src="img/dinero.png" alt="Dinero"  width="100px" height="100px">Debe ser en efectivo</p>
                

                <div class="Container-confir">
                    <a class="Confir" href="#"><img src="img/Check.png" alt="Procesar" width="31px" height="31px" >Confirmar tu orden</a>
                </div>
            </div>
        </main>
        <!--footer-->
        <?php
        include_once("recursos/footer.php");
        ?>
    </body>
</html>
