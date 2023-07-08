@extends('layouts.master')

@section('content')
    <div class="main-conent mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">

                        <h4>Posts apagados</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end gap-4">
                        <a href="{{route('posts.index')}}" class="btn btn-primary float-right">Back</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="https://via.placeholder.com/150" alt="imagem" class="img-fluid" width="100">
                            </td>
                            <td>Lorem ipsum dolor.</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic qui officiis voluptates
                                neque voluptatem dolore laudantium.</td>
                            <td>Noviidades</td>
                            <td>04/05/2023</td>
                            <td>
                                <a href="#" class="btn-sm btn-success btn">Mostrar</a>
                                <a href="#" class="btn-sm btn-primary btn">Editar</a>
                                <a href="#" class="btn-sm btn-danger btn" >Excluir</a>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
