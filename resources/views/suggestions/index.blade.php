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
                <th>Sugerencia</th>
                <th>Categoris</th>
                <th>nombre</th>
                <th colspan="2">&nbsp;</th>
            </thead>
            <tbody>
                    @foreach($suggestions as $suggestion)
                    <tr>
                        <td> {{ $suggestion->id}} </td>
                        <td> {{ $suggestion->suggestion}}</td>
                        <td>{{ $suggestion->category}}</td>
                        <td>{{ $suggestion->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection