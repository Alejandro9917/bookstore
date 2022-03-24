@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de colecciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Colección</th>
                            <th scope="col">Actualizado el</th>
                            </tr>
                        </thead>
                        <tbody id="table_collections">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        getCollections();
    });
    
    //Función para obtener los datos de los tags
    function getCollections(){
        $.ajax({
            url: "http://localhost:8000/collections",
            method: "GET"
        }).done(function(res){
            var response = res;
            printCollections(response);
        });
    }
    //Función para pintar las tarjetas con los datos
    function printCollections(collections){
        collections.map(function(collection){
            $("#table_collections").append(
                "<tr>" +
                    "<td>" + collection.id + "</td>" +
                    "<td>" + collection.name + "</td>" +
                    "<td>" + collection.updated_at + "</td>" +
                "</tr>"
            );
        });
    }
</script> 

@endsection