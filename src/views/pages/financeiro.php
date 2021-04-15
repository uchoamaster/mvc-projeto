<?php $render('header-principal'); ?>
<?php $render('navbar-header-principal'); ?>
<?php $render('navbar-sidebar-principal'); ?>

       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
                <h3 class="m-0 mt-4">TECH STORE 35.115.712/0001-30
                    <span class="col-sm-6" id="hours"></span>
                </h3>

            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-md-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Novos Pedidos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">+ info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Aumento de vendas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">+ info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Novos usuários registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">+ info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Visitantes novos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">+ info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <!-- AREA CHART -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Vendas no Semestre</h3>

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

                            <!-- DONUT CHART -->
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Navegadores utilizados no sistema </h3>

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
                                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- PIE CHART -->
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Quantidade de usuários por navegador</h3>

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
                                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col (LEFT) -->
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <!-- LINE CHART -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Total no semestre por vendedor</h3>

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
                                        <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- BAR CHART -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Total Anual</h3>

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

                            <!-- STACKED BAR CHART -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Total vendas</h3>

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
                            <!-- /.card -->

                        </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->


</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

</div>
<!-- ./wrapper -->
<script>
function showTime() {
let d = new Date();
let a = d.getFullYear();
let mes = ("0" + (d.getMonth() + 1)).slice(-2);
let dia = ("0" + (d.getDate())).slice(-2);
let h = ("0" + (d.getHours())).slice(-2);
let min = ("0" + (d.getMinutes())).slice(-2);
let s = ("0" + (d.getSeconds())).slice(-2);
let txt = '' + dia + '/ ' + mes + '/ ' + a + ' ' + h + ':' + min + ':' + s;
document.querySelector('#hours').innerHTML = txt;
}
let timer = setInterval(showTime, 1000);
</script>

<!-- REQUIRED SCRIPTS -->
<script src="https://unpkg.com/draggabilly@2.2.0/dist/draggabilly.pkgd.min.js"></script>
<script src="dist/js/chrome-tabs.js"></script>
<script>
var el = document.querySelector('.chrome-tabs')
var chromeTabs = new ChromeTabs()

chromeTabs.init(el)

el.addEventListener('activeTabChange', ({
detail
}) => console.log('Active tab changed', detail.tabEl))
el.addEventListener('tabAdd', ({
detail
}) => console.log('Tab added', detail.tabEl))
el.addEventListener('tabRemove', ({
detail
}) => console.log('Tab removed', detail.tabEl))

document.querySelector('a[data-add-tab]').addEventListener('click', _ => {
chromeTabs.addTab({
    title: 'Nova Aba',
    favicon: false
})
})

document.querySelector('a[data-add-background-tab]').addEventListener('click', _ => {
chromeTabs.addTab({
    title: 'Nova Aba',
    favicon: false
}, {
    background: true
})
})

document.querySelector('a[data-remove-tab]').addEventListener('click', _ => {
chromeTabs.removeTab(chromeTabs.activeTabEl)
})

document.querySelector('a[data-theme-toggle]').addEventListener('click', _ => {
if (el.classList.contains('chrome-tabs-dark-theme')) {
    document.documentElement.classList.remove('dark-theme')
    el.classList.remove('chrome-tabs-dark-theme')
} else {
    document.documentElement.classList.add('dark-theme')
    el.classList.add('chrome-tabs-dark-theme')
}
})

window.addEventListener('keydown', (event) => {
if (event.ctrlKey && event.key === 't') {
    chromeTabs.addTab({
        title: 'New Tab',
        favicon: false
    })
}
})
</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>
<!-- ChartJS -->
<script src="././plugins/chart.js/Chart.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<script>
$(function() {
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
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Digital Goods',
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
    }, {
        label: 'Electronics',
        backgroundColor: 'rgba(210, 214, 222, 1)',
        borderColor: 'rgba(210, 214, 222, 1)',
        pointRadius: false,
        pointColor: 'rgba(210, 214, 222, 1)',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
    }, ]
}

var areaChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
        display: false
    },
    scales: {
        xAxes: [{
            gridLines: {
                display: false,
            }
        }],
        yAxes: [{
            gridLines: {
                display: false,
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
//- LINE CHART -
//--------------
var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
var lineChartOptions = $.extend(true, {}, areaChartOptions)
var lineChartData = $.extend(true, {}, areaChartData)
lineChartData.datasets[0].fill = false;
lineChartData.datasets[1].fill = false;
lineChartOptions.datasetFill = false

var lineChart = new Chart(lineChartCanvas, {
    type: 'line',
    data: lineChartData,
    options: lineChartOptions
})

//-------------
//- DONUT CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.
var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
var donutData = {
    labels: [
        'Chrome',
        'IE',
        'FireFox',
        'Safari',
        'Opera',
        'Navigator',
    ],
    datasets: [{
        data: [700, 500, 400, 600, 300, 100],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }]
}
var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
new Chart(donutChartCanvas, {
    type: 'doughnut',
    data: donutData,
    options: donutOptions
})

//-------------
//- PIE CHART -
//-------------
// Get context with jQuery - using jQuery's .get() method.
var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
var pieData = donutData;
var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
new Chart(pieChartCanvas, {
    type: 'pie',
    data: pieData,
    options: pieOptions
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
    responsive: true,
    maintainAspectRatio: false,
    datasetFill: false
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
    responsive: true,
    maintainAspectRatio: false,
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
</body>

</html>
