@extends('layouts.app')

@section('title','Dino Exploder - Article')

@section('main')
	@parent
	<h5>
		Welcome to the article page
	</h5>
	
	<p>You can signin <a href="{{ route('signin') }}">here</a> to add more article.</p><br>
@endsection

@section('article')
	@forelse ($article as $art)
		<div class="card" style="width:300px; margin:10px" class="row"></a>
			<!-- le corps -->
				<div onclick="location.href='{{ route('getArticleInfoForum', ['id' => $art->id ]) }}';" style="cursor:pointer;" class="card-body">
					<h4 class="card-title">{{ $art->titre }}</h4>
					<!-- le contenu -->
					<p class="card-text">{{ $art->phrase }}</p>
					<p class="card-text">{{ $art->contenu }}</p>
					<p class="btn btn-primary">Author : {{ $art->auteur }}</p>
				</div>
		</div>
	@empty
	<div class="alert alert-warning" role="alert">
		<em>Oh sorryyyy ! </em>No article available...<br>
		But don't worry, you can connect to add more content <a href="{{ route('signin') }}" class="alert-link">right here</a> :).
	</div>
	@endforelse 
@endsection

<script type="text/javascript">
   function redirectCard()
	{

	}
</script>