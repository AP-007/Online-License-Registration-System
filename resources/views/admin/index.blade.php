@extends('admin.layouts.layout')

@section('content')


    <main>
        <div class="main__container">
            <!-- MAIN TITLE STARTS HERE -->

            <div class="main__title">
                <img src="assets/hello.svg" alt="" />
                <div class="main__greeting">
                    <h1>Ride with pride</h1>
                    <p>Welcome to your admin dashboard</p>
                </div>
            </div>

            <!-- MAIN TITLE ENDS HERE -->

            <!-- MAIN CARDS STARTS HERE -->
            <div class="main__cards">
                <div class="card">
                    <i
                        class="fa fa-user-o fa-2x text-lightblue"
                        aria-hidden="true"
                    ></i>
                    <div class="card_inner">
                        <p class="text-primary-p">Total User</p>
                        <span class="font-bold text-title">969</span>
                    </div>
                </div>

                <div class="card">
                    <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
                    <div class="card_inner">
                        <p class="text-primary-p">Approval Request</p>
                        <span class="font-bold text-title">2467</span>
                    </div>
                </div>
            </div>
            <div id="piechart" style="width: 900px; height: 500px;"></div>
        </div>
    </main>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Category', 'Number of applicants'],
                ['Motorcycle',     2500],
                ['scooter',      733],
                ['Car',  2053],

            ]);

            var options = {
                title: 'Types of license'

            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

@endsection
