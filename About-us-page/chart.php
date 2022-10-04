<?php 

$connn = mysqli_connect("localhost","root","","donation_procurement");

$resultt =" SELECT
DATE(`patient`.`created`) AS `date`,
COUNT(`patient`.`pid`) AS `count`
FROM `patient`
WHERE `patient`.`created` BETWEEN '2022-09-01 00:00:00' AND '2022-11-31 23:59:59'
GROUP BY `date`
ORDER BY `date`" ;
$displayy=mysqli_query($connn, $resultt);


foreach($displayy As $data){
    $date[] = $data['date'];
    $count[] = $data['count'];

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
  const labels = <?php echo json_encode($date) ?>;

  const data = {
    labels: labels,
    datasets: [{
      label: 'Number of Patients registered on a daily basis',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: <?php echo json_encode($count) ?>,
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