@extends('layouts.master')

@section('content')
    <div class="main-conent mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">

                        <h4>Novo Posts</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end gap-4">
                        <a href="{{route('posts.index')}}" class="btn btn-primary float-right">Back</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="imagem" class="form-control">Imagem</label>
                        <input type="file" name="imagem" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="titulo" class="form-control">Título</label>
                        <input type="text" name="titulo" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="categoria" class="form-control">Categoria:</label>
                        <select name="categoria" id="" class="form-control">
                            <option value="">Selecione</option>
                            <option value="">Novidades</option>
                            <option value="">Dicas</option>
                            <option value="">Tutoriais</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descrição" class="form-control">Descrição</label>
                        <textarea type="text" name="descrição" class="form-control" id="" cols="30" rows="10" placeholder="Descrição"></textarea>
                    </div>
                    <div class="form-group mt-3">
                       <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
