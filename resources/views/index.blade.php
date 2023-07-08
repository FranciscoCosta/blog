@extends('layouts.master')

@section('content')

<div class="main-conent mt-5">
    <div class="card-header">
        Posts

        <a href="#" class="btn btn-primary float-right">Novo Post</a>
        <a href="#" class="btn btn-secondary float-right mr-2">Lixeira</a>
    </div>

    <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" style="width: 10%">Imagem</th>
      <th scope="col" style="width: 20%">Titulo</th>
      <th scope="col" style="width: 30%">Descrição</th>
      <th scope="col" style="width: 10%">Categoria</th>
      <th scope="col" style="width: 10%"> Publicado em</th>
      <th scope="col" style="width: 10%"> Ações</th>
    </tr>

  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
            <img src="https://via.placeholder.com/150" alt="imagem" class="img-fluid" width="100">
      </td>
      <td>Lorem ipsum dolor.</td>
      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic qui officiis voluptates neque voluptatem dolore laudantium.</td>
      <td>Noviidades</td>
      <td>04/05/2023</td>
        <td>
            <a href="#" class="btn btn-primary">Editar</a>
            <a href="#" class="btn btn-danger">Excluir</a>
    </tr>
  </tbody>
</table>
    </div>
</div>
@endsection