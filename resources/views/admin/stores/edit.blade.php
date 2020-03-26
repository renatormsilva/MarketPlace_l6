
@extends('layouts.app')

@section('content')
<h1>Criar loja</h1>
<form action=" {{Route('admin.stores.update', ['store' => $store->id])}} " method="post">
    <input type="hidden" name="_token" value=" {{csrf_token()}} ">
    <div class="form-group">
        <label>Nome loja</label>
        <input type="text" name="name" class="form-control" value="{{$store->name}} ">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control"  value="{{$store->description}} ">
    </div>

    <div class="form-group">
        <label>telefone</label>
        <input type="text" name="phone" class="form-control" value=" {{$store->phone}} ">
    </div>

    <div class="form-group">
        <label>Celular/Whatsapp</label>
        <input type="text" name="mobile_phone" class="form-control" value=" {{$store->mobile_phone}}">
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value=" {{$store->slug}} ">
    </div>

    <div>
        <button type="submit" class="btn btn-lg btn-success">Atualizar loja</button>
    </div>
</form>

@endsection