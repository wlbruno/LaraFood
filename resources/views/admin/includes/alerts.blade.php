@if ($errors->any())
	<div class="alert alert-warning">
		@foreach ($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
	</div>
@endif

@if (session('messeger'))
<div class="alert alert-info">
	{{ session('messeger') }}
</div>

@endif

@if (session('error'))
<div class="alert alert-danger">
	{{ session('error') }}
</div>

@endif

@if (session('info'))
<div class="alert alert-warning">
	{{ session('info') }}
</div>

@endif