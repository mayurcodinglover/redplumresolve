<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #343a40;
            /* Dark background for contrast */
            color: white;
            /* White text for readability */
        }

        h6 {
            text-align: left;
            display: block;
            font-size: 2em;
            margin-top: 0.67em;
            margin-bottom: 0.67em;
            margin-left: 0;
            margin-right: 0;
        }

        .table-responsive {
            overflow: auto;
            height: 250px;
            margin-top: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #fff;
            /* White text for table */
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
            text-align: center;
            /* Center align table content */
        }

        .table thead th {
            background-color: #495057;
            /* Darker header for contrast */
            color: white;
            /* White text for header */
        }

        .card {
            background-color: #495057;
            /* Dark card background */
            border: none;
            /* Remove card border */
            margin-bottom: 20px;
            /* Space between cards */
        }

        .card-body {
            padding: 20px;
            /* Padding inside card */
        }

        .btn-info {
            background-color: #007bff;
            /* Bootstrap primary color */
            border: none;
            /* Remove border */
        }

        .btn-info:hover {
            background-color: #0056b3;
            /* Darker on hover */
        }

        .info-icon {
            font-size: 2em;
            /* Increase icon size */
        }

        .chart-area {
            position: relative;
            height: 400px;
            /* Set a fixed height for charts */
        }

        /* Scrollbar styles */
        .table-responsive::-webkit-scrollbar {
            width: 10px;
        }

        .table-responsive::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 5px;
        }

        .table-responsive::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card {
                margin-bottom: 15px;
                /* Reduce margin on smaller screens */
            }

            .table-responsive {
                height: auto;
                /* Allow table to expand on smaller screens */
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- <div style="text-align:center;"><img src="{{ asset('/storage/businesslogo/Redplum_Logo.png') }}" alt="" style="margin-bottom:20px; max-width:160px;"></div> --}}
</head>

<body>
    <div class="content">

        <div style="text-align:center;">
            <img align="center" alt=""
                src="https://mcusercontent.com/716207398fa885c7f8a872b73/images/90e289f3-11cc-d2d2-e887-85b8874aa15f.png"
                width="348.16"
                style="max-width:1210px; padding-bottom: 0; display: inline !important; vertical-align: bottom;"
                class="mcnImage">
        </div>
        &nbsp;
        &nbsp;
        <form method="GET">

            <p>Admin</p>

            <p>Operator </p>

            <p>Location </p>

            <div class="row justify-content-space-between">

                <div class="col-md-2">
                    <div class="form-group">
                        <select class="selectpicker col-sm-12 pl-0 pr-0" id="operator_id" name="operator_id"
                            data-style="select-with-transition" title="" data-size="100">
                            <option value="">--Select Operators--</option>
                        </select>


                        <h6 class="card-white" style="color:white">opnm</h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <select class="selectpicker col-sm-12 pl-0 pr-0 location_id" id="location_id" name="location_id"
                            data-style="select-with-transition" title="" data-size="100">
                            <option value="">--Select Locations--</option>
                        </select>


                        <h6 class="card-white" style="color:white">locnm</h6>
                    </div>
                </div>



                <div class="col-md-2">
                    <div class="form-group">
                        <button class="btn btn-info btn-sm" type="submit"
                            style=" font-size: 13px; border:0;padding: 9px 23px;">Filter</button>
                    </div>
                </div>

            </div>

        </form>


        {{-- <br><strong style="color:white">Businesses :-</strong><br><br> --}}
        <div class="row">


            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-parimary">
                                    <i class="tim-icons icon-bank "></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <a href="#">
                                        <p class="card-category" style="color:white"><strong>Total Oprators</strong>
                                        </p>

                                        <h3 class="card-title totalop" style="color:white">
                                            <strong></strong>
                                        </h3>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" style="display">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-success">
                                    <i class="tim-icons icon-bank "></i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <a href="#">
                                        <p class="card-category" style="color:white"><strong>Total
                                                Locations</strong></p>


                                        <h3 class="card-title totalloc" style="color:white">
                                            <strong></strong>
                                        </h3>

                                        <h3 class="card-title" style="color:white">
                                            <strong></strong>
                                        </h3>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-primary">

                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">

                                    <a href="#">

                                        <p class="card-category" style="color:white"><strong>Active Machines</strong>
                                        </p>
                                        <h3 class="card-title actm" style="color: white">
                                            <strong>Totalactive machine</strong>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="info-icon text-center icon-primary">
                                    <i class="material-symbols-sharp">stadia_controller</i>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="numbers">
                                    <p class="card-category" style="color: white"><strong>Lifetime credit</strong></p>
                                    <h3 class="card-title lftc" style="color: white"><strong></strong>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="info-icon text-center icon-primary">
                                    <i class="material-icons">attach_money</i>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="numbers">
                                    <p class="card-category" style="color: white"><strong>Lifetime Net</strong></p>
                                    <h3 class="card-title lftmnet" style="color: white"><strong></strong>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="info-icon text-center icon-primary">
                                    <i class="material-icons">account_balance_wallet</i>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="numbers">
                                    <p class="card-category" style="color: white"><strong>Lifetime Earned</strong>
                                    </p>
                                    <h3 class="card-title lftmearned" style="color: white">
                                        <strong></strong>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                            </div>
                            <div class="container mt-5 creditin">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                            <label class="btn btn-sm btn-info btn-simple active creditin" id="creditIn">
                                                <input type="radio" class="d-none" name="options" autocomplete="off" checked>
                                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Credit In</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-money-coins"></i>
                                                </span>
                                            </label>
                                            <label class="btn btn-sm btn-info btn-simple net" id="net">
                                                <input type="radio" class="d-none" name="options" autocomplete="off">
                                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Net</span>
                                                <span class="d-block d-sm-none">
                                                    <i class="tim-icons icon-single-02"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="chartBig1"></canvas>
                    <input type="hidden" id="totalearned" value="totalearned">
                    <input type="hidden" id="totalgamesplayed" value="totalgamesplayed">
                    <input type="hidden" id="totalpointsplayed" value="totalpointsplayed">
                    <input type="hidden" id="totalCredit" value="totalcredit">
                    <input type="hidden" id="totalPointsEarned" value="totalpointsearned">
                </div>
            </div>
        </div>
    </div>
    </div>









    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="text-align:center;"><b>{{ __('Location-wise Net!') }}</b>
                </h4>
            </div>
            <div class="card-body">
                <div id="piechart2" style="height: 250px;"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="text-align:center;">
                    <b>{{ __('Location-wise Credit In!') }}</b>
                </h4>
            </div>
            <div class="card-body">
                <div id="piechart3" style="height: 250px;"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="text-align:center;">
                    <b>{{ __('Location-wise Earned!') }}</b>
                </h4>
            </div>
            <div class="card-body">
                <div id="piechart4" style="height: 250px;"></div>
            </div>
        </div>
    </div>

    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center;">
                        <b>{{ __('Machine Collection Records') }}</b>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow:auto;height:250px;margin-top:20px;">
                        <table class="table">
                            <thead>
                                <th style="text-align: center;">
                                    Terminal ID
                                </th>
                                <th style="text-align: center;">
                                    Last Collection Date
                                </th>
                                <th style="text-align: center;">
                                    Collection Due
                                </th>
                                <th style="text-align: center;">
                                    Location
                                </th>
                                <th style="text-align: center;">
                                    Machine Type
                                </th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>






    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
       $(document).ready(function() {
    // Show alert when the document is ready
    $.ajax({
        url: '/test',
        method: 'get',
        success: function(res) {
            var operatorSelect = $('#operator_id');
            operatorSelect.empty().append('<option value="">--Select Operators--</option>');
            console.log(res);

            $.each(res.operators, function(index, operator) {
                operatorSelect.append('<option value="' + operator.id + '">' + operator.name + '</option>');
            });

            var locationSelect = $('#location_id');
            locationSelect.empty().append('<option value="">--Select Location--</option>');
            $.each(res.locations, function(index, location) {
                locationSelect.append('<option value="' + location.id + '">' + location.name + '</option>');
            });

            $('.totalop').text(res.totaloprators);
            $('.totalloc').text(res.totalloctions);
            $('.actm').text(res.totalActiveMachine);
            $('.lftc').text("1000");
            $('.lftmnet').text(res.Earned);
            $('.lftmearned').text(res.lfTmEarned);

            console.log("response data", res);

            var totalpointsplayed = res.totalPointsPlayed;
            var totalearned = res.earnedData;
            console.log("Totalpoints played", totalpointsplayed);

            const labels = totalpointsplayed.map(item => item.month);
            const values = totalpointsplayed.map(item => item.points_count);
            const values2 = totalearned.map(item => item.earned);

            // Create the line chart
            const ctx = document.getElementById('chartBig1').getContext('2d');
            let myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Points Played',
                        data: values,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 1,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Click event for Credit In button
            $('#creditIn').click(function() {
                if (myLineChart) {
                    myLineChart.destroy(); // Destroy the previous chart instance
                }
                myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Points Played',
                            data: values,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 1,
                            fill: true,
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });

            // Click event for Net button
            $('#net').click(function() {
                if (myLineChart) {
                    myLineChart.destroy(); // Destroy the previous chart instance
                }
                myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Total Earned',
                            data: values2,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 1,
                            fill: true,
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        }
    });
}); 


    </script>


</body>

</html>
