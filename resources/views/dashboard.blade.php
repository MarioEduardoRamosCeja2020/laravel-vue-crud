@extends('app')
@section('content')


<div id="crud" class="row">
    <div class ="col-xs-12">
        <h1> Suggestions</h1>
    </div>
    <div class="col-sm-7">
        <a href="#" class="bn btn-primary pull-rigth" data-toggle="modal"  data-target="#create">
        Nueva sugerencia
        </a>
        <table class="table table-haver table-sprite">
        
            <thead>
                <th>ID</th>
                <th>Suggestion</th>
                <th colspan="2">&ndsp;</th>
            </thead>
            <tbody>
                <tr v-for="suggestion in Suggestions">
                    <td width="10px">1</td>
                    <td width="10px">Suggestion</td>
                    <td width="10px">
                    <a href="#" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                    <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        @include('create')
    </div>
    <div class ="col-sm-5">
        <pre>
            @{{ $data }}
        </pre>
    </div>

</div>

@endsection