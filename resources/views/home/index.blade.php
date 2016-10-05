@extends('blog')

@section('title')
	Página inicial - Posts Recentes
@stop

@section('content')
<div class="content-grids">
	<div class="col-md-8 content-main">
	 	<div class="content-grid">
	 		@foreach($posts as $post)				 
			 	<div class="content-grid-info">
				 	<img src="{{ $post['imageUrl'] }}" alt=""/>
				 	<div class="post-info">
				 		<h4><a href="javascript: void(0);" onclick="alert('A implementar')">{{ $post['title'] }}</a>  {{ $post['date'] }} / 27 Comentários</h4>
				 		<p>{{ $post['preview'] }}</p>
				 		<a href="javascript: void(0);" onclick="alert('A implementar')"><span></span>READ MORE</a>
				 	</div>
			 	</div>
	 		@endforeach
	 	</div>
	</div>
	<div class="col-md-4 content-right">
		<div class="archives">
			<h3>ARCHIVES</h3>
			<ul>
				@foreach($archives as $archive)
			 		<li><a href="javascript: void(0);" onclick="alert('A implementar')">{{ $archive }}</a></li>
			 	@endforeach
			</ul>
		</div>
		<div class="categories">
		 	<h3>CATEGORIES</h3>
		 	<ul>
		 		@foreach($categories as $category)
			 		<li><a href="javascript: void(0);" onclick="alert('A implementar')">{{ $category }}</a></li>
			 	@endforeach
		 	</ul>
	 	</div>
	 	<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>

@stop