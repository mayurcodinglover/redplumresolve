<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <canvas id="lineChart" width="400" height="200"></canvas>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Fetch data from Laravel backend
        $.ajax({
            url: '/get-chart-data', // Your Laravel endpoint
            method: 'GET',
            success: function (data) {
                // Extract labels and values
                const labels = data.map(item => item.label);
                const values = data.map(item => item.value);

                // Render Chart.js line chart
                const ctx = document.getElementById('lineChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                    labels: labels, // X-axis labels
                    datasets: [{
                        label: 'My Data',
                        data: values, // Y-axis values
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2,
                        fill: true,
                        pointRadius: 5, // Sets the radius for points
                        pointHoverRadius: 7, // Enlarges points on hover
                        pointStyle: 'circle', // Ensures the points are rounded
                    }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: true
                            }
                        },
                        scales: {
                            x: {
                                beginAtZero: true
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            },
            error: function (err) {
                console.error("Error fetching data", err);
            }
        });
    });
</script>


</html>