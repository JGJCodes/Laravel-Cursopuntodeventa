@extends('layouts.admin')
@section('title','Gestion de las categorias')
@section('styles')

@section('options')
<li class="nav-item nav-settings d-none d-lg-block">
    <a class="nav-link" href="#">
      <i class="fas fa-ellipsis-h"></i>
    </a>
  </li>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Categorias
      </h3>
    <nav aria -label="breadcrumb">
        <ol class="breadcrumb" >
            <li class="breadcrumb-item" ><a href="#"> Administrador </a></li>
            <li class="breadcrumb-item active" aria-current="page" ><a href="{{route('categories.index')}}"> Categorias </a></li>
        </ol>
    </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-envelope"></i>
             Tabla Categorias
            </h4>
            <ul>
                <li class="nav-item  d-lg-flex">
                    <a class="nav-link" href="{{route('categories.create')}}">
                      <span class="btn btn-primary">Crear nuevo +</span>
                    </a>
                </li>
                <li class="nav-item  d-lg-flex">
                    <a class="nav-link" href="">
                      <span class="btn btn-info btn-icon-text">Imprimir
                      <i class="fa fa-print btn-icon-append"></i> </span>
                    </a>
                </li>
                <li class="nav-item  d-lg-flex form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="button">Search</button>
                      </div>
                    </div>
                </li>
            </ul>

            <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Description</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row" >{{$category->id}}</th>
                            <td>
                                <a href="{{route('categories.show',$category)}}" >{{$category->name}}</a>
                            </td>
                            <td>{{$category->description}}</td>
                            <td style="width: 50px;">


                                <a class="jsgrid-button jsgrid-edit-button" href="{{route('categories.edit',$category)}}"
                                title="Editar">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="jsgrid-button jsgrid-edit-button"
                                type="submit" title="Eliminar">
                                    <i class="far fa-edit"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
@endsection

@section('scripts')
{!! Html::script('Melody/js/data-table.js') !!}
@endsection
