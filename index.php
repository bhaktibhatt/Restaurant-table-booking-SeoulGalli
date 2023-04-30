<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Credentials | SeoulGalli</title>
    <link rel="stylesheet" href="main.css">
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
<img class="bg-img" src="./Assets/bibmbapbg.jpg" alt="bg-img">
<div class="main">
    <p>Dear User, Your credentials are saved please confirm the details</p>
    <div class="table-container">
        <table>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>People</th>
            </tr>
            <tr>
                <td><?php echo"$date"?></td>
            </tr>
                
        </table>
    </div>
</div>
</body>
</html>