@extends('navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/estilosi.css">
      <link rel="stylesheet" href="css/estilosCa.css">
      <title>Carrito de compras-Bookstore</title>
  </head>

  <body>

    <!--A partir de acá comienza el cuerpo de la página-->
    <main>
    <div class="detalle">
        <h5>Detalle de compra</h5>
        <button class="btn bn-seguir " type="button"><img class="" src="img/Regre.png" alt="Seguir comprando" width="40px" height="40px" >Seguir comprando</button>
    </div>



        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-sm-offset-0">

                  <table class="table1 ">
                     <thead class="th1">
                         <tr>
                             <th class="text-center" scope="col">Producto</th>
                             <th class="text-center"scope="col">Precio</th>
                             <th class="text-center"scope="col">Cantidad</th>
                             <th class="text-center"scope="col">Total</th>
                         </tr>
                      </thead>

                     <tbody>
                          <tr>
                             <td class="text-center"><img src="img/LIBRO 1.png" alt="Libro 1" class="imgL img-fluid d-block mx-auto"><h6 class="h6T text-center">Titulo de libro</h6>
                             <button class="btn bn-Eliminar"><img  src="img/Eliminar.png" alt="Eliminar" width="20px" height="20px" > Eliminar producto</button></td>
                             <td class="text-center">$20.00</td>
                             <td class="text-center"><button class="btn bn-min">-</button><input type="number" min="0" class="Numero" readonly ><button class="btn bn-max">+</button></td>
                             <td class="text-center">$20.00</td>
                          </tr>
                      </tbody>

                 </table>
             </div>
         </div>

        </div>


        <div class="Dosbtns d-grid gap-2 d-md-block text-center">
            <button class="btn bn-Vaciar" type="button"><img  src="img/basura.png" alt="Vaciar" width="40px" height="40px" >Vaciar carrito</button>
            <button class="btn bn-Procesar " type="button">Procesar pago<img class="" src="img/Procesar.png" alt="Procesar" width="40px" height="40px" ></button>
        </div>





    </main>
     <!--footer-->
@include('footer')
</body>
</html>
@endsection
