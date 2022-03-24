@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de tags</div>

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
                            <th scope="col">Tag</th>
                            <th scope="col">Actualizado el</th>
                            </tr>
                        </thead>
                        <tbody id="table_tags">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        getTags();
    });
    
    //Función para obtener los datos de los tags
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
    function printTags(tags){
        tags.map(function(tag){
            $("#table_tags").append(
                "<tr>" +
                    "<td>" + tag.id + "</td>" +
                    "<td>" + tag.tag + "</td>" +
                    "<td>" + tag.updated_at + "</td>" +
                "</tr>"
            );
        });
    }
</script> 

@endsection

