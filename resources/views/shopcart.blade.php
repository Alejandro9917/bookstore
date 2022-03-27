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
      <link rel="stylesheet" href="/css/estilosindex.css">
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <title>Inicio-Bookstore</title>
    </head>

  <body>
    @if (Session::exists('client'))
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
                        </tr>
                    </thead>
                    <tbody id="table_purchase">
                    </tbody>

                </table>
            </div>
        </div>

    </div>

    <div class="pb-5 Dosbtns d-grid gap-2 d-md-block text-center">
        <a href="http://localhost:8000/purchases/completeDelete/{{ Session::get('client')->id }}" class="btn bn-Vaciar" type="button"><img  src="img/basura.png" alt="Vaciar" width="40px" height="40px" >Vaciar carrito</a>
        <a href="http://localhost:8000/purchases/complete/{{ Session::get('client')->id }}" class="btn bn-Procesar " type="button">Procesar pago<img class="" src="img/Procesar.png" alt="Procesar" width="40px" height="40px" ></a>
        <button class="btn bn-Procesar" id="total">Total compra</button>
    </div>
    @else

    @endif

@include('footer')

    <script type="text/javascript">
        $(document).ready(function() {
            getPurchases();
        });

        function getPurchases(){
            $.ajax({
                url: "http://localhost:8000/purchases/{{ Session::get('client')->id }}",
                method: "GET"
            }).done(function(res){
                var response = res;
                printShopcart(response);
            });
        }

        function printShopcart(purchases){
            var total = Number('0');
            purchases.map(function(purchase){
                if(purchase.state === 1){
                    $("#table_purchase").append(
                        "<tr>" +
                            "<td class='text-center'><img src='" + purchase.comic.image + "' alt='Libro 1' width='150' class='imgL img-fluid d-block mx-auto'><h6 class='h6T text-center'>" + purchase.comic.name + "</h6>" +
                            "<a href='http://localhost:8000/purchases/delete/" + purchase.id + "' class='btn bn-Eliminar'><img  src='img/Eliminar.png' alt='Eliminar' width='20px' height='20px' > Eliminar producto</a></td>" +
                            "<td class='text-center'>$" + purchase.comic.price + "</td>" +
                        "</tr>"
                    );
                    total = total + Number(purchase.comic.price);
                }
            });

            $("#total").text("Total compra: " + total);
        }
    </script>
</body>
</html>
@endsection
