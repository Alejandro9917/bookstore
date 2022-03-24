@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 offset-md-11">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comicForm">Ingresar Comic</button>
        </div>
        <div class="col-md-10 mt-1">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table" id="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editora</th>
                            <th scope="col">Tag</th>
                            <th scope="col">Actualizado el</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="table_comics">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        getComics();
        getCollections();
        getTags();
    });

    $("#send").click(function(){
        var id = $("#send").attr('data-whatever');
        if(id == "null"){
            send();
            getComics();
            getCollections();
            getTags();
            clear();
        }
        else{
            //update(id);
        }
        var table = $("#table tbody").empty();
    });
    
    //Función para obtener los datos de las comics
    function getComics(){
        $.ajax({
            url: "http://localhost:8000/comics",
            method: "GET"
        }).done(function(res){
            var response = res;
            printComics(response);
        });
    }

    function getCollections(){
        $.ajax({
            url: "http://localhost:8000/collections",
            method: "GET"
        }).done(function(res){
            var response = res;
            printCollections(response);
        });
    }

    function getTags(){
        $.ajax({
            url: "http://localhost:8000/tags",
            method: "GET"
        }).done(function(res){
            var response = res;
            printTags(response);
        });
    }

    //Función para pintar las tarjetas con los datos
    function printComics(comics){
        comics.map(function(comic){
            $("#table_comics").append(
                "<tr>" +
                    "<td>" + comic.id + "</td>" +
                    "<td>" + comic.collection.name + ": " + comic.name + "</td>" +
                    "<td>" + comic.collection.author + "</td>" +
                    "<td>" + comic.collection.publisher + "</td>" +
                    "<td>" + comic.tag.tag + "</td>" +
                    "<td>" + comic.updated_at + "</td>" +
                    "<td><a href='javascript:void(0)' type='button' class=' btn btn-danger'>Delete</a></td>" +
                "</tr>"
            );
        });
    }

    function send(){
        //Se crea un objeto ajax
        $.ajax({            
            url: "{{ url('/comics/store') }}",
            method: 'POST',
            data: $("#form_comic").serialize(),
            success: function(res){
                var response = res;
            },
            error: function(res){
                var response = res;
                //setErrors(response.responseJSON.errors);
            }
        });
    }

    function deleteComic(id){
        $.ajax({
            url: ''
        });
    }

    function printCollections(collections){
        collections.map(function(collection){
            $("#collection_id").append(
                "<option value='" + collection.id + "'>" + collection.name + "</option>"
            );
        });
    }

    function printTags(tags){
        tags.map(function(tag){
            $("#tag_id").append(
                "<option value='" + tag.id + "'>" + tag.tag + "</option>"
            );
        });
    }

    function clear(){
        $(':input','#form_comic')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .prop('checked', false)
        .prop('selected', false);
    }
</script> 

@endsection

<div class="modal fade" id="comicForm" tabindex="-1" aria-labelledby="comicFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="comicFormLabel">Formulario de Comic</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="form_comic">
        {{ csrf_field() }}
            <label for="basic-url" class="form-label">Seleccione colección</label>
            <div class="input-group mb-3">
                <select class="form-select" id="collection_id" name="collection_id" aria-label="Default select example">
                    <option selected>Seleccione una opción</option>
                </select>
            </div>

            <label for="basic-url" class="form-label">Seleccione tag</label>
            <div class="input-group mb-3">
                <select class="form-select" id="tag_id" name="tag_id" aria-label="Default select example">
                    <option selected>Seleccione una opción</option>
                </select>
            </div>

            <label for="basic-url" class="form-label">Ingrese nombre del tomo</label>
            <div class="input-group mb-3">
                <input id="name" name="name" type="text" class="form-control" placeholder="Nombre del tomo" aria-label="Nombre del tomo" aria-describedby="name">
            </div>

            <label for="basic-url" class="form-label">Ingrese el precio del comic</label>
            <div class="input-group mb-3">
                <input id="price" name="price" type="text" class="form-control" placeholder="Precio del comic" aria-label="Precio del comic" aria-describedby="image">
            </div>

            <label for="basic-url" class="form-label">Ingrese el tipo comic</label>
            <div class="input-group mb-3">
                <input id="type" name="type" type="text" class="form-control" placeholder="Tipo del comic" aria-label="Tipo del comic" aria-describedby="image">
            </div>

            <label for="basic-url" class="form-label">Ingrese la edición del comic</label>
            <div class="input-group mb-3">
                <input id="edition" name="edition" type="text" class="form-control" placeholder="Edición del comic" aria-label="Edición del comic" aria-describedby="image">
            </div>

            <label for="basic-url" class="form-label">Ingrese la imagen del comic</label>
            <div class="input-group mb-3">
                <input id="image" name="image" type="text" class="form-control" placeholder="Imagen del tomo" aria-label="Imagen del tomo" aria-describedby="image">
            </div>
            <a id="send" type="submit" class="btn btn-success float-right" data-whatever="null"><i class="fas fa-cloud-upload-alt"></i>Guardar</a>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>