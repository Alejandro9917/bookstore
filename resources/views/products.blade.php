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
    <link rel="stylesheet" href="/css/P.css">
    <title>Productos-Bookstore</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row py-3 ">
        <div class="row col-3">
            <div class="col-lg-9">
                    <aside class="float-left">
                        <h1>Filtros</h1>
                        <ul>
                            <li>Nueva coleccion</li>
                            <li>Más vendidos</li>
                            <li>Favoritos</li>
                        </ul>
                    </aside>
                </div>
            </div>
   <div class="col-lg-9">
    <div class="row py-3 row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 1.png"  alt="Libro1" class="card-img-top ">
                </div>
            </div>
         </div>
         <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 2.jpg"  alt="Libro2" class="card-img-top ">
                </div>
            </div>
         </div>
         <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 1.png"  alt="Libro1" class="card-img-top ">
                </div>
            </div>
         </div>
         <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 2.jpg"  alt="Libro2" class="card-img-top ">
                </div>
            </div>
         </div>
         <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 1.png"  alt="Libro1" class="card-img-top ">
                </div>
            </div>
         </div>
         <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 2.jpg"  alt="Libro2" class="card-img-top ">
                </div>
            </div>
         </div>
         <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 1.png"  alt="Libro1" class="card-img-top ">
                </div>
            </div>
         </div>
         <div class="col">
            <div class="card">
                <div class="mx auto imgBox">
                    <img src="/img/LIBRO 2.jpg"  alt="Libro2" class="card-img-top ">
                </div>
            </div>
         </div>
         <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
    </div>
</div>
</div>
</div>
    @include('footer')
</body>
</html>

@endsection