<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner animated zoomInUp">
    <div class="item active">
      <a href="#"><img src="/images/articles/{{ $image->name }}" /></a>
      <div class="carousel-caption">
        <h3>{{ $image->article->title }}</h3>
        <p>{{ $image->article->category->name }}</p>
      </div>
    </div>
    @foreach ($article->images as $image)
      <div class="item">
        <a href="#"><img src="/images/articles/{{ $image->name }}" /></a>
        <div class="carousel-caption">
          <h3>{{ $image->article->title }}</h3>
          <p>{{ $image->article->category->name }}</p>
        </div>
      </div>
    @endforeach

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>