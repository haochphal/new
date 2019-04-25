<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Midterm exam</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Calculate Interest</div>
                    <hr>
                    <div class="card-body">
                        <div class="form-group">
                            <span>Capital</span>
                            <input type="number" class='form-control' name='capital'>
                        </div>  
                        <div class="form-group">
                            <span>Capital</span>
                            <input type="number" class='form-control' name='interest'>
                        </div>  
                        <div class="form-group">
                            <span>Capital</span>
                            <input type="number" class='form-control' name='duration'>
                        </div>  
                        <div class="form-group">
                            <button class="btn btn-success btn-block">Calculate</button>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>
<?php
    interface Banking{
        public function calculate($interest,$borrowed);
    }
?>