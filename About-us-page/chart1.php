<?php 

$con = mysqli_connect("localhost","root","","donation_procurement");

// $result =" SELECT organname, COUNT(*) as number FROM organ group by   organname" ;
$result = "SELECT fname, COUNT(*) as number FROM patient group by   fname";
$display=mysqli_query($con, $result);

foreach($display As $data){
    $fname[] = $data['fname'];
    $number[] = $data['number'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>

    <style>
        #myChart{
            width: 50%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div>
    <canvas id="myChart" style="height: 300px; "></canvas>
    </div>

    <script>
  const labels = <?php echo json_encode($fname) ?>;

  const data = {
    labels: labels,
    datasets: [{
      label: 'Available Organs',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: <?php echo json_encode($number) ?>,
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>
 
<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

</body>
</html>