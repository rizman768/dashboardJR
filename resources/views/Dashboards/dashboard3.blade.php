@extends('Template.template')

@section('content')
<div class="main-content">
	<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Prediksi Pengguna Kecelakaan</h3>
							<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<a class="btn btn-default" href="">Next Month</a>
								</div>
								<div class="col-md-3">
								<a class="btn btn-default" href="">Next Semester</a>
								</div>
								<div class="col-md-3">
								<a class="btn btn-default" href="">Next Year</a>
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="col-md-12">
									<div id="chart3" class="ct-chart"></div>
								</div>
							</div>
                            <div class="row">
                                <div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">1,252</span>
											<span class="title">Downloads .csv</span>
										</p>
									</div>
								</div>
								<div class="col-md-9">
									<div class="right">
										<a class="btn btn-primary" href="/prediksiKecelakaan">Diagram</a> </button>
										<a href="/prediksiKecelakaan/penggunabaru" class="btn btn-default">Pengguna Baru</a></button>
									</div>
								</div>
                            </div>
						</div>
					</div>
					<!-- END OVERVIEW -->
	</div>
</div>    
@endsection
@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chart3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Berpotensi kecelakaan',
            y: 35,
            sliced: true,
            selected: true
        }, {
            name: 'Berpotensi Tidak Kecelakaan',
            y: 65
        }]
    }]
});
</script>
@endsection