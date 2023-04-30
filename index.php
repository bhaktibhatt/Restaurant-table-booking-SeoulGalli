<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Credentials | SeoulGalli</title>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./credintials-php.css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    $date =$_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    "Dear User, Your credentials are saved please confirm the details";
    
}
?>
<!-- <img class="bg-img" src="./Assets/bibmbapbg.jpg" alt="bg-img"> -->
<div class="main">
    <p>Dear User, Your credentials are saved please confirm the details</p>
    <div class="table-container">
        <table>
            <tr>
                <th>Date</th>
                <td><?php echo"$date"?></td>
            </tr>
            <tr>
                <th>Time</th>
                <td><?php echo"$time"?></td>
            </tr>
            <tr>
                <th>People</th>
                <td><?php echo"$people"?></td>
            </tr>
        </table>
        <br>
        <p>please verify your phone no. and email below -</p>
        <p>+91 <?php echo "$phone"?></p>
        <p><?php echo "$email"?></p>
    </div>
</div>
</body>
</html>