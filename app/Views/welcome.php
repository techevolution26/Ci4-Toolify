<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Toolify Now</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B0UglyR+jN6cQGTMjZWjVydQEJ2OdFjhN/1T" crossorigin="anonymous">
    <style>
         body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f9fc;
            text-align: center;
         }

         .welcome-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

         }
         .welcome-container h1 {
            color: #343a40;
         }
         .get-started-btn {
            margin-top: 1.5rem;
         }

    </style>
</head>
<body>
    
<div class="welcome-container">
    <h1>Welcome to Toolify Now!!</h1>
    <p>Your Family management Solution to keep tasks organized and everyone connected</p>

    <button href="<?= base_url('auth/login');?>" class="btn btn-primary get-started-btn">Get Started
    </button>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>