
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Payment</title>
  </head>
  <body>
    <style>
  a{
    color: SlateBlue;
    text-decoration: none;
  }

  </style>
    <nav>

    <ul>

      <li><a href="pass1.php">Home</a></li>
      <li><a href="#">Patients</a>
        <ul>
          <li><a href="viewpatients.php">Old Patients</a></li>
          <li><a href="patient.php">New Patients</a></li>
        </ul>
      </li>
      <li><a href="#">Information</a>
        <ul>
          <li><a href="passmedical.php">Medical Info</a></li>
          <li><a href="passoral.php">Oral Health Info</a></li>
        </ul>
      </li>
      <li><a href="#">Case Sheet</a>
        <ul>
          <li><a href="passpatient.php">General Info</a></li>
          <li><a href="case_sheet.php">Case Sheet</a></li>
          <li><a href="oralhealthh.php">Oral Health</a></li>
        </ul>
      </li>
      <li>
      <a href="updatepayment.php">Change Payment</a>
      </li>
    </ul>
  </nav>
    <div class="table-title">
    <center><h1>Estimation</h1></center>
    </div>
    <table class="table-fill">
    <thead>
    <tr>
    <th class="text-center">Treatment</th>
    <th class="text-center">Estimate</th>
    <th class="text-center">Amount Paid</th>
    <th class="text-center">Balance</th>
    <th class="text-center">Time</th>
    </tr>
    </thead>
    <p id="demo"></p>
    <?php
    include_once 'db.php';
    $x=$_SESSION['name'];
    $res=mysqli_query($conn,"SELECT * from amount where id='$x'") or die('error');
      while($r=mysqli_fetch_array($res))
      {
        $a=$r['treatment'];
        $b=$r['amount_to_be_paid'];
        $c=$r['amount_paid'];
        $d=$r['balance'];
        $e=$r['time'];

        echo '<tr>
            <td><a href="pay.php?treat='.$a.'">'.$a.'</a></td>
            <td>'.$b.'</td>
            <td>'.$c.'</td>
            <td>'.$d.'</td>
            <td>'.$e.'</td>
            </tr>';
      }

    ?>
    </table>
    </body>

    <div class="table-title">
    <center><h1>Total Estimation History</h1></center>
    </div>
    <table class="table-fill">
    <thead>
    <tr>
    <th class="text-center">Estimate</th>
    <th class="text-center">Amount Paid</th>
    <th class="text-center">Balance</th>
    </tr>
    </thead>
    <p id="demo"></p>
    <?php
    include_once 'db.php';
    $x=$_SESSION['name'];
    $res=mysqli_query($conn,"SELECT * from total where id='$x'") or die('error');
      while($r=mysqli_fetch_array($res))
      {
        $a=$r['total_amount_to_be_paid'];
        $b=$r['total_amount_paid'];
        $c=$r['total_balance'];

        echo '<tr>
            <td>'.$a.'</td>
            <td>'.$b.'</td>
            <td>'.$c.'</td>
            </tr>';
      }

    ?>
    </table>
    </body>
