@extends('app')
@section('title', 'Contact')
@section('content')

<div class="card">
    <div class="card-header">
        Quote
    </div>
    <div class="card-body">
        <form action="/" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>
                            Sugerencia*
                        </label>
                        <imput type="text" class="form-control" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>
                            Categoria 1
                        </label>
                        <select name="" id="categoria" class="form-control">
                            <option>categoria 1</option>
                            <option>categoria 2</option>
                            <option>categoria 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                        <div class="form-group">
                            <label>
                                Nombre
                            </label>
                            <imput type="text" class="form-control">
                        </div>
                </div>
                <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block"> guardar</button>
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection 

