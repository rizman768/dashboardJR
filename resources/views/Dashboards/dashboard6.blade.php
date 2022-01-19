@extends('Template.template')

@section('content')
<div class="main-content">
	<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Prediksi Pengguna Menunggak</h3>
							<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>TM_EstimatedPossession/G</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>120</td>
										</tr>
										<tr>
											<td>OPP_EstimatedPossession/G</td>
										</tr>
										<tr>
											<td>110</td>
										</tr>
										<tr>
											<td>TM_Defrating</td>
										</tr>
										<tr>
											<td>105</td>
										</tr>
										<tr>
											<td>TM_Offrating</td>
										</tr>
										<tr>
											<td>123</td>
										</tr>
										<tr>
											<td>FG%_Prev</td>
										</tr>
										<tr>
											<td>D.495</td>
										</tr>
										<tr>
											<td>FGA/G_Prev</td>
										</tr>
										<tr>
											<td>21</td>
										</tr>
										<tr>
											<td>FT%_Prev</td>
										</tr>
										<tr>
											<td>0.756</td>
										</tr>
										<tr>
											<td>FTA/G_Prev</td>
										</tr>
										<tr>
											<td>8.3</td>
										</tr>
										<tr>
											<td>3P/G_Prev</td>
										</tr>
										<tr>
											<td>1.5</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<p>
											<span class="title">Predict</span>
										</p>
									</div>
								</div>
                                <div class="col-md-9">
									<div class="right">
										<a class="btn btn-default" href="/prediksiMenunggak">Diagram</a>
										<a href="/prediksiMenunggak/penggunabaru" class="btn btn-primary">Pengguna Baru</a>
									</div>
								</div>
							</div>
						</div>
					</div>
	</div>
</div>    
@endsection