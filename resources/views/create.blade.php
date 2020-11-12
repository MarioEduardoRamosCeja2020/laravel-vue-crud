@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label for="titulo" class="col-lg-2 control-label">Título</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="titulo" placeholder="titulo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contenido" class="col-lg-2 control-label">Contenido</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="5" id="contenido"></textarea>
                        <span class="help-block">Envia tu mensaje</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                    <button class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection