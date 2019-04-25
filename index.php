<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET and POST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="card bg-warning">
            <div class="card-header text-white">Contact Form</div>
            <div class="card-body">
                <form action="process.php" method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" name="btn-message"> Send Message</button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>