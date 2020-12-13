<!-- product area start -->

	<div class="popular-product-area wrapper-padding-3 pt-115 pb-115">
		<div class="container-fluid">
			<div class="section-title-6 text-center mb-50">
				<h2>Pet Care</h2>
				<p>Pet Care adalah aplikasi yang bisa membantu meningkatkan kepedulian masyarakat terhadap hewan sekitar dengan memberikan panduan
				pemeliharaan hewan untuk memantau pertumbuhan dan perkembangan hewan peliharaannya.</p>
			</div>
			{{-- @if (Auth::user()!= null && Auth::user()->is_admin==1)
			<div class="section-title-6 text-center mb-50">
				<h2>Artikel Pet Care</h2>
			</div>
			@foreach($artikels as $artikel)
			
			<div class="card">
				<div class="card-header">
				 {{$artikel->judul}} 
				</div>
				<div class="card-body right">
				<form method = 'POST' action="{{route('artikel.update', $artikel->id)}}">
					@csrf
					{{method_field('PUT')}}
					<h5 class="card-title">{{$artikel->author}}</h5>
					<p class="card-text">{{$artikel->konten}}</p>
					<div class='float-right'>
					<a href="artikel" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ubah</a>
				</form>
				</div>
			</div>
			@endforeach
			@endif --}}
		</div>
	</div>
	<!-- product area end -->
