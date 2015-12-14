@extends('admin.template.main')

@section('nav-title', 'Imagenes')
@section('title', 'Imagenes')

@section('content')	 
	<div class="row">
		@foreach ($images as $image) 
			<div class="col-md-6">
				<div class="panel panel-default">
				  		<div class="panel-heading text-center">
				    		<h3  class="panel-title">En artículo: "{{ $image->article->title }}"</h3>
				  		</div>
				  		<div class="panel-body">
				    		<img src="/images/articles/{{ $image->name }}" class="img-responsive">
				  		</div> 
				</div>
			</div>
		@endforeach
		
	</div>
 <div class="text-center">
    {!! $images->render() !!}
    </div>
@endsection