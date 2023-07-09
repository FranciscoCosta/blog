@extends('layouts.master')

@section('content')
    <div class="main-conent mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">

                        <h4>Posts</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end gap-4">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary float-right">Novo Post</a>
                        <a href="#" class="btn btn-secondary float-right mr-2">Lixeira</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Imagem</th>
                            <th scope="col" style="width: 20%">Titulo</th>
                            <th scope="col" style="width: 30%">Descrição</th>
                            <th scope="col" style="width: 10%">Categoria</th>
                            <th scope="col" style="width: 10%"> Publicado em</th>
                            <th scope="col" style="width: 20%"> Ações</th>
                        </tr>

                    </thead>
                    <tbody>
                        @if ($posts->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center">Nenhum registro encontrado</td>
                            </tr>
                        @else
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>
                                        <img src="{{ asset($post->image) }}" alt="imagem" class="img-fluid"
                                            width="100">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->category_id }}</td>
                                    <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                                    <td>
                                        <a href="#" class="btn-sm btn-success btn">Mostrar</a>
                                        <a href="{{route('posts.edit', $post->id)}}" class="btn-sm btn-primary btn">Editar</a>
                                        <a href="   #" class="btn-sm btn-danger btn">Excluir</a>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
