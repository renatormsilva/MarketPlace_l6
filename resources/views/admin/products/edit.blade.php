
@extends('layouts.app')

@section('content')
<h1>Criar Produto</h1>
<form action=" {{Route('admin.products.store')}} " method="post">
    <input type="hidden" name="_token" value=" {{csrf_token()}} ">
    <div class="form-group">
        <label>Nome loja</label>
        <input type="text" name="name" class="form-control" value=" {{$product->name}} ">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" value=" {{$product->description}}" >
    </div>

    <div class="form-group">
        <label>Conteudo</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control" value=" {{$product->body}} " ></textarea>
    </div>

    <div class="form-group">
        <label>Preço</label>
        <input type="text" name="price" class="form-control" value=" {{$product->price}} ">
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value=" {{$product->slug}} ">
    </div>

    <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
</form>

@endsection