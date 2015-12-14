@extends('front.template.main')

@section('title')
    
	

@section('content')
	   <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- First Blog Post -->
                @foreach($articles as $article)
                <div class="panel panel-info box-shadow--8dp animated bounceInUp">
                	<div class="panel-body">
		                <h2>
		                    <a href="#">{{ $article->title }}</a>
		                </h2>
		                <p class="lead">
		                    by <a href="index.php">{{ $article->user->name }}</a>
		                </p>
		                <div class="col-md-6">
			                <p><span class="glyphicon glyphicon-time"></span> Creado el {{ $article->created_at->diffForHumans() }}</p>
			            </div>
			            <div class="col-md-6 text-right">
			                <p><span class="glyphicon glyphicon-folder-open"></span>  En <a href="#">{{ $article->category->name }} </a></p>
			            </div>
		                @foreach($article->images as $image)
		                <img class="img-responsive" src="/images/articles/{{ $image->name }}" alt="">
		                @endforeach
		                <hr>
		                <p>{{ substr(strip_tags($image->article->content), 0, 80)}}...</p>
		                <a class="btn btn-primary" href="#">Leer más<span class="glyphicon glyphicon-chevron-right"></span></a>
		            </div>
                </div>
                <hr class="accessory">
                @endforeach



            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="panel panel-danger box-shadow--4dp animated flipInX">
	                <div class="panel-heading text-center">
						Buscar en el Blog
	                </div>

	                	    <div class="input-group">
	                        <input type="text" class="form-control">
	                        <span class="input-group-btn">
	                            <button class="btn btn-default" type="button">
	                                <span class="glyphicon glyphicon-search"></span>
	                        </button>
	                        </span>
	                    </div>
	                    <!-- /.input-group -->
	                
				</div>
                <!-- Blog Categories Well -->
                <div class="panel panel-info box-shadow--4dp animated flipInX">
                	<div class="panel-heading text-center">
	                    Categorias
	                </div>

	                <div class="panel-body">
	                    <div class="row">
	                        <div class="col-lg-8">
	                            <ul class="nav nav-pills">
	                            	@foreach($categories as $category)
	                                <li class=""><a href="#">{{ $category->name }}<span class="badge">42</span></a></li>
	                                
	                                @endforeach
	                                
	                            </ul>
	                        </div>
	              		</div>
	                       
	            </div>


                    <!-- /.row -->
                </div>

                  <!-- Blog Tags Well -->
                <div class="panel panel-info box-shadow--4dp animated flipInX">
                	<div class="panel-heading text-center">
	                    Tags
	                </div>
	             
	                <div class="panel-body">
	                    	@foreach($tags as $tag)
	                           <a href="#"><span class="label label-danger tags">{{ $tag->name }}</a></span>
	                        @endforeach
	                </div>
	                       
				</div>
                    <!-- /.row -->

                <!-- Blog Facebook Well -->

                <div class="panel panel-info box-shadow--4dp animated flipInX">
                	<div class="panel-heading text-center">
	                    Like en Facebook
	                </div>
	             
	                <div class="panel-body">
	                    	<div class="fb-page" data-href="https://www.facebook.com/clinicadelpcbucaramanga" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
	                    		<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/clinicadelpcbucaramanga"><a href="https://www.facebook.com/clinicadelpcbucaramanga">La clínica del PC</a></blockquote>
	                    		</div>
	                    	</div>
	                </div>
	                       
				</div>
                    
            </div>

                <!-- Side Widget Well -->

				
            
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        

    </div>
    <!-- /.container -->

	<div class="text-center">
		{!! $articles->render() !!}
	</div>

<footer>
	<div class="panel-footer text-center ">
				Designed by: Los Lobos | 2015 | Todos los Derechos Reservados

	</div>
            <!-- /.row -->
</footer>
@endsection


