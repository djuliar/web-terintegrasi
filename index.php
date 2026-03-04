<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myChart" style="width: 500px"></canvas>

<script>
fetch("data.php")
.then(response => response.json())
.then(data => {

    const labels = data.map(item => item.jurusan);
    const values = data.map(item => item.total);

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Mahasiswa',
                data: values
            }]
        }
    });

});
</script>
</body>
</html>