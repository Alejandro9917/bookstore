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
      <!--Barra de navegación-->
      
    <!--A partir de acá comienza el cuerpo de la página-->
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="/img/Aviso.png"  alt="Anuncio1" class="img-fluid d-block mx-auto" >
                </div>
                <div class="carousel-item">
                    <img src="/img/anuncio2.jpg" alt="Anuncio2" class="img-fluid d-block mx-auto">
                </div>
                <div class="carousel-item">
                    <img src="/img/Aviso.png"  alt="Anuncio3" class="img-fluid d-block mx-auto"> 
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!--Espacio de relleno-->
        <div class="Container-rell">
        </div>

        <!--Productos Destacados-->
        <div class="Prodd text-center">
            <p id="Sub1"><b>PRODUCTOS DESTACADOS</b></p>
        </div>

        <div class="container-Des" id="comics_destacados">
        </div>

        <!--Productos Recientes-->
        <div class="ProdR text-center">
            <p id="Sub2"><b>PRODUCTOS RECIENTES</b></p>
        </div>

        <div class="container-Des" id="comics_recientes">
        </div>

    <script type="text/javascript">
        $(document).ready(function() {
            getComics();
            popularComics();
        });
        
        //Función para obtener los datos de las comics
        function getComics(){
            $.ajax({
                url: "http://localhost:8000/comics/popular",
                method: "GET"
            }).done(function(res){
                var response = res;
                printComics(response, "comics_destacados");
            });
        }
        //Función para comics populares
        function popularComics(){
            $.ajax({
                url: "http://localhost:8000/comics/recent",
                method: "GET"
            }).done(function(res){
                var response = res;
                printComics(response, "comics_recientes");
            });
        }
        //Función para pintar las tarjetas con los datos
        function printComics(comics, space){
            comics.map(function(comic){
                $("#" + space).append(
                    "<div class='card'>" + 
                        "<div class='mx auto imgBox'>" +
                            "<img src='" + comic.image +"' class='card-img-top'>" +
                            "<div class='Contenido'>" +
                            "<p class='text-center'>" + comic.collection.name + ": " + comic.name +"</p>" +
                                "<div class='bu'><button type='button' class='btn bn'><img class='d-inline-block' src='/img/shopcart2.png' width='40px' height='40px' alt='carrito'> Agregar a carrito</button></div>" +
                            "</div>" +
                        "</div>" +
                    "</div>"
                );
            });
        }
    </script>  

    @include('footer')
</body>
</html>
     
@endsection