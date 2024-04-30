
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Pedidos</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('Pedidos.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="fecha" class="col-sm-4 control-label">fecha</label>
<input type="date" name="fecha" id="fecha"  class="form-control" placeholder="fecha">
@if($errors->has('fecha'))
<div class="alert-danger">{{ $errors->first('fecha') }}</div>
@endif
</div>
<div class="form-group">
<label for="cliente_id" class="col-sm-4 control-label">cliente_id</label>
<input type="text" maxlength="20" name="cliente_id" id="cliente_id"  class="form-control" placeholder="cliente_id">
@if($errors->has('cliente_id'))
<div class="alert-danger">{{ $errors->first('cliente_id') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('Pedidos.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection