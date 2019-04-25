<?php 
    if(isset($_POST["btn-message"])){
        $username=$_POST["username"];
        $sms = $_POST["message"];
        // echo $username;
        ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <div class="container mt-4">
            <div class="card bg-success">
            <div class="card-header"><?php echo $username;?></div>
            <div class="cardbody">
                <p><?php echo $sms; ?></p>
            </div>
            </div>
        </div>
<?php
    }
?>