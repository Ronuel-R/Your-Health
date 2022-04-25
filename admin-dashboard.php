<?php 
  $con = new mysqli('localhost','root','','yourhealth');
$query = $con->query("
    SELECT 
      Monthname(date) as monthname,
        COUNT(userid) as users
    FROM accounts
    GROUP BY monthname
    ORDER BY month(date) asc
  ");

  foreach($query as $data)
  {
    $month[] = $data['monthname'];
    $users[] = $data['users'];
  }
   $query = $con->query("
    SELECT 
      Monthname(date) as monthn,
        COUNT(appointmentid) as appid
    FROM appointment
    GROUP BY monthn
    ORDER BY month(date) asc
  ");

  foreach($query as $dataline)
  {
    $monthn[] = $dataline['monthn'];
    $appid[] = $dataline['appid'];
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Health</title>
    <link rel="shortcut icon" type="image/png" href="logo3.png">
    <link rel="stylesheet" href="styleforadmindb.css">
    <script src="https://kit.fontawesome.com/a2bdf52fb7.js" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
        <div class = "menu-bar">
        <div class ="logogo">
        <img class ="logo" src="Images/logo3.png"> 
        <Span>Your Health</span>
        <ul>
                <li class = "active"><a href="admin-dashboard.php"><i class="fa-solid fa-house-chimney-heart"></i>Home</a></li>
                <li><a href="Admin-approval.php">Pending Users</a></li>
                <li><a href="Admin-app-approve.php">Pending Appointments</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
            </div>
            </div>
            <br /><br />
           
<div class=chartcard>
<div class=chartbox>
  <canvas id="myChart"></canvas>
  </div>
  <br /><br/>
  <div class=chartbox>
<canvas id="linechart"></canvas>
</div>
</div>




</body>
<script>
  //bar chart
  const labels = <?php echo json_encode($month) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Monthly User Registration',
      data: <?php echo json_encode($users) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };
  //bar chart
  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  //Bar chart
  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
    //line chart
    const labelsline = <?php echo json_encode($monthn) ?>;
const dataline = {
  labels: labelsline,
  datasets: [{
    label: 'Monthly Appointment Scheduled',
    data: <?php echo json_encode($appid) ?>,
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  }]
};
    //line chart
    const config2 = {
  type: 'line',
  data: dataline,
};
    //line chart  
    var linechart = new Chart(
    document.getElementById('linechart'),
    config2
  );
</script>

</html>