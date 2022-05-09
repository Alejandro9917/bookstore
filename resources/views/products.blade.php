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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Productos-Bookstore</title>
</head>
<body>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nombre del cómic</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <p id="author">Nombre del autor: </p>
              <p id="tag">Tag: </p>
              <p id="price">Precio: </p>
              <p id="publisher">Editora: </p>
              <p id="edition">Edición: </p>
              <p id="description">Descripción: </p>
              <img id="image" src="" class="img-fluid" alt="..." width="200" heigh="200">
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
      </div>
  </div>
    <div class="ProdR text-center">
    <div class="container-fluid">
    <div class="row py-3 ">
          <!--<div class="row col-3">
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
            </div>-->
   <div class="col-lg-9">
    <div class="row py-3 row-cols-1 row-cols-md-4 g-4" id="comics">

    </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
        $(document).ready(function() {
            getComics();
            popularComics();
        });

        //Función para obtener los datos de las comics
        function getComics(){
            $.ajax({
                url: "http://localhost:8000/comics",
                method: "GET"
            }).done(function(res){
                var response = res;
                printComics(response, "comics");
            });
        }

        function showModal(id){
            $.ajax({
                url: "http://localhost:8000/comic/" + id,
                method: "GET"
            }).done(function(res){
                var comic = res;
                $("#exampleModalLabel").text("Nombre del cómic: " + comic.collection.name + ": " + comic.name);
                $("#author").text("Nombre del autor: " + comic.collection.author);
                $("#tag").text("Tag: " + comic.tag.tag);
                $("#price").text("Precio: " + comic.price);
                $("#publisher").text("Editora: " + comic.collection.publisher);
                $("#edition").text("Edición: " + comic.edition);
                $("#description").text("Descripción: " + comic.collection.description);
                $("#image").attr("src", comic.image);
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
                                "<div class='bu'>"+
                                    @if (Session::exists('client'))
                                    "<a href='http://localhost:8000/purchases/add/" + comic.id + "/" + {{ Session::get('client')->id }} + "' type='button' class='btn bn'><img class='d-inline-block' src='/img/shopcart2.png' width='40px' height='40px' alt='carrito'></a>"+
                                    @else

                                    @endif
                                    "<a href='javascript:void(0)' onclick='showModal(" + comic.id + ")' type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Ver más</a>"+
                                "</div>" +
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
