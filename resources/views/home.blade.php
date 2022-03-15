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

        <div class="container-Des">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 1.png" alt="Libro1" class="card-img-top ">
                    <div class="Contenido">
                    <p class="text-center">TITULO DE LIBRO</p>
                        <div class="bu"><button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                 </div>
         </div>

            <div class="card">
                <div class="imgBox">
                    <img src="/img/LIBRO 2.jpg" alt="Libro2" class="card-img-top ">
                    <div  class="Contenido">
                     <p class="text-center">TITULO DE LIBRO</p>
                     <div class="bu"><button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                </div>
            </div>
                
            <div class="card">
                <div class="imgBox">
                    <img src="/img/LIBRO 3.jpg" alt="Libro3" class="card-img-top">
                    <div  class="Contenido">
                      <p class="text-center">TITULO DE LIBRO</p>
                      <div class="bu"><button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                </div>
         </div>

         <div class="card">
                <div class="imgBox">
                    <img src="/img/LIBRO 4.png" alt="Libro4" class="card-img-top ">
                    <div  class="Contenido">
                     <p class="text-center">TITULO DE LIBRO</p>
                       <div class="bu"><button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                </div>
            </div>
     </div>

        <!--Productos Recientes-->
        <div class="ProdR text-center">
            <p id="Sub2"><b>PRODUCTOS RECIENTES</b></p>
        </div>

        <div class="container-Des">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 5.jpg" alt="Libro5" class="card-img-top ">
                    <div class="Contenido">
                    <p class="text-center">TITULO DE LIBRO</p>
                        <div class="bu"><button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                 </div>
         </div>

            <div class="card">
                <div class="imgBox">
                    <img src="/img/LIBRO 6.jpg" alt="Libro6" class="card-img-top ">
                    <div  class="Contenido">
                     <p class="text-center">TITULO DE LIBRO</p>
                     <div class="bu"><button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                </div>
            </div>
                
            <div class="card">
                <div class="imgBox">
                    <img src="/img/LIBRO 7.jpg" alt="Libro7" class="card-img-top">
                    <div  class="Contenido">
                      <p class="text-center">TITULO DE LIBRO</p>
                      <div class="bu"><button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                </div>
         </div>

         <div class="card">
                <div class="imgBox">
                    <img src="/img/LIBRO 8.jfif" alt="Libro8" class="card-img-top ">
                    <div  class="Contenido">
                     <p class="text-center">TITULO DE LIBRO</p>
                       <div class="bu"> <button type="button" class="btn bn"><img class="d-inline-block" src="/img/shopcart2.png" width="40px" height="40px" alt="carrito"> Agregar a carrito</button></div>
                    </div>
                </div>
            </div>
     </div>
     @include('footer')
</body>
</html>

@endsection


