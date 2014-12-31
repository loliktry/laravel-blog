	<article>
		<header>
			<h1><a href="{{ URL::route('viewPost', array('id' => $post->id))}}">{{ $post->title }}</a></h1>
		</header>
		<div class="content">
			{{ $post->content }}
		</div>
		<footer>
			<p>Posted {{$post->created_at->diffforHumans()}}</p>
		</footer>
	</article>