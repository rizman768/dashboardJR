@extends('Template.template')

@section('content')
<div class="main-content">
	<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Download Data</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<a class="btn btn-default" href="">Download .csv</a>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<a class="btn btn-default" href="">Forecasting Pendapatan</a>
									<a class="btn btn-default" href="">Prediksi Menunggak</a>
									<a class="btn btn-default" href="">Prediksi Kecelakaan</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
	</div>
</div>    
@endsection