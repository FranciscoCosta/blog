@extends('layouts.master')

@section('content')
    <div class="main-conent mt-5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">

                        <h4>Novo Posts</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end gap-4">
                        <a href="{{ route('posts.index') }}" class="btn btn-primary float-right">Voltar</a>
                    </div>
                </div>
            </div>




            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image" class="form-control">Imagem</label>
                        <input type="file" name="image" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="title" class="form-control">Título</label>
                        <input type="text" name="title" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="form-control">Categoria:</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Escolha</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control">Descrição</label>
                        <textarea type="text" name="description" class="form-control" id="" cols="30" rows="10"
                            placeholder="Descrição"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
