@extends('admin.template.main')

@section('title')
    
@endsection

@section('content')


    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>PANEL DE ADMINISTRACIÓN</h1>
                        <h3>Bienvenido {{ Auth::user()->name }}</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="{{ route('admin.articles.create')}}" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Crear un nuevo Artículo</span></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.categories.create')}}" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Agregar Categorias</span></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.tags.create')}}" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Agregar Tags</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


@endsection

