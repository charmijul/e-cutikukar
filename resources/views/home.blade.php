@extends('layout.main')

@section('container')

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <h5 class="mb-2">Dashboard Overview & statistic</h5>
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Cuti</span>
                      <span class="info-box-number">{{ $totalCuti }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Disetujui</span>
                      <span class="info-box-number">{{ $totalCutiY }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Ditangguhkan</span>
                      <span class="info-box-number">{{ $totalCutiD }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Ditolak</span>
                      <span class="info-box-number">{{ $totalCutiN }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
      
              <!-- Small Box (Stat card) -->
              <h5 class="mb-2 mt-4">Detail Cuti</h5>
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{ $totalCutiM }}</h3>
      
                      <p>Menunggu Konfirmasi</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="/cuti-approval" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>{{ $totalCutiY }}</sup></h3>
      
                      <p>Disetujui</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/cuti-setuju" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>{{ $totalCutiD }}</h3>
      
                      <p>Ditangguhkan</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="/cuti-ditangguhkan" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>{{ $totalCutiN }}</h3>
      
                      <p>Ditolak</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-chart-pie"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                       </i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->

                          <!-- STACKED BAR CHART -->
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Total Jenis Cuti Chart</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
      
      
              <h5 class="mb-2">Information Cuti</h5>
              <div class="card card-success">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                      <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                          <h5 class="card-title text-primary text-white">Pegawai</h5>
                          <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                          <a href="#" class="text-white">Last update 2 mins ago</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                      <div class="card mb-2">
                        <img class="card-img-top" src="../dist/img/photo2.png" alt="Dist Photo 2">
                        <div class="card-img-overlay d-flex flex-column justify-content-center">
                          <h5 class="card-title text-white mt-5 pt-2">Atasan</h5>
                          <p class="card-text pb-2 pt-1 text-white">
                            Lorem ipsum dolor sit amet, <br>
                            consectetur adipisicing elit <br>
                            sed do eiusmod tempor.
                          </p>
                          <a href="#" class="text-white">Cuti</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                      <div class="card mb-2">
                        <img class="card-img-top" src="../dist/img/photo3.jpg" alt="Dist Photo 3">
                        <div class="card-img-overlay">
                          <h5 class="card-title text-primary">Card Title</h5>
                          <p class="card-text pb-1 pt-1 text-white">
                            Lorem ipsum dolor <br>
                            sit amet, consectetur <br>
                            adipisicing elit sed <br>
                            do eiusmod tempor. </p>
                          <a href="#" class="text-primary">Last update 3 days ago</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
{{-- 444444444 --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->
              <div class="card card-primary" style="display: none;">
                <div class="card-header">
                  <h3 class="card-title">Area Chart</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- BAR CHART -->
              <div class="card card-success" style="display: none;">
                <div class="card-header">
                  <h3 class="card-title">Bar Chart</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
 
  
            </div>
            <!-- /.col (RIGHT) -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
      <!-- ChartJS -->
      <script src="{{ asset('/') }}plugins/chart.js/Chart.min.js"></script>

      <!-- Page specific script -->
      <script>
        $(function () {
          /* ChartJS
           * -------
           * Here we will create a few charts using ChartJS
           */
      
          //--------------
          //- AREA CHART -
          //--------------
 
          // Get context with jQuery - using jQuery's .get() method.
          var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
      
          var areaChartData = {
            labels  : ['Cuti Tahunan', 'Cuti Sakit', 'Cuti Melahirkan', 'Cuti Alasan Penting ', 'Cuti di Luar tanggungan Negara', 'Cuti Besar'],
            datasets: [
              {
                label               : 'Total Jenis Cuti',
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointRadius          : false,
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : [{{ $cutitahun }}, {{ $cutisakit }}, {{ $cutilahir }}, {{ $cutipenting }}, {{ $cutinegara }}, {{ $cutibesar }}]
              },
              {
                label               : ' ',
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointRadius         : false,
                pointColor          : 'rgba60,141,188,1)',
                pointStrokeColor    : '#c1c7d1',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : []
              },
            ]
          }
      
          var areaChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
              display: false
            },
            scales: {
              xAxes: [{
                gridLines : {
                  display : false,
                }
              }],
              yAxes: [{
                gridLines : {
                  display : false,
                }
              }]
            }
          }
      
          // This will get the first returned node in the jQuery collection.
          new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
          })

          //-------------
          //- BAR CHART -
          //-------------
          var barChartCanvas = $('#barChart').get(0).getContext('2d')
          var barChartData = $.extend(true, {}, areaChartData)
          var temp0 = areaChartData.datasets[0]
          var temp1 = areaChartData.datasets[1]
          barChartData.datasets[0] = temp1
          barChartData.datasets[1] = temp0
      
          var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
          }
      
          new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
          })
      
          //---------------------
          //- STACKED BAR CHART -
          //---------------------
          var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
          var stackedBarChartData = $.extend(true, {}, barChartData)
      
          var stackedBarChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            scales: {
              xAxes: [{
                stacked: true,
              }],
              yAxes: [{
                stacked: true
              }]
            }
          }
      
          new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
          })
        })
      </script>

@endsection
