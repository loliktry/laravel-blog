@section('content')
	<h3>Add a new blog post</h3>
	<form action="{{ URL::route('createPost')}}" method="post">
		<div class="form-group">
			<input name="title" class="form-control" type="text" placeholder="Title blog" />

		</div>
		<div class="form-group">
			<textarea name="content" class="form-control" placeholder="Write here"></textarea>

		</div>
		<input type="submit" class="btn btn-primary" value="Masukkan">
	</form>
@stop