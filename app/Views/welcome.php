<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Welcome to Toolify Now</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B0UglyR+jN6cQGTMjZWjVydQEJ2OdFjhN/1T" crossorigin="anonymous">
   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      header {
         background-color: #fff;
         padding: 20px 40px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
         position: fixed;
         top: 0;
         width: 100%;
         z-index: 1000;
         background-color: #024950;
      }

      .container {
         display: flex;
         justify-content: space-between;
         align-items: center;
      }

      /* Logo Styling */
      .logo h1 {
         font-size: 24px;
         color: #333;
      }

      /* Navigation Styling */
      nav ul {
         list-style: none;
         display: flex;
      }

      nav ul li {
         margin-left: 20px;
      }

      /* Button Styling */
      .btn {
         text-decoration: none;
         padding: 10px 20px;
         border-radius: 4px;
         font-size: 14px;
         text-align: center;
         display: inline-block;
      }

      .login {
         background-color: #3498db;
         color: white;
      }

      .signup {
         background-color: #2ecc71;
         color: white;
      }

      /* Button Hover Effects */
      .btn:hover {
         opacity: 0.8;
      }
      #family-hub-txt {
         /* font-size: 24px; */
         color: #D3D9D4;
      }

      body {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         background-color: #003135;
         text-align: center;
         color: #333;
         font-family: Arial, sans-serif;
      }

      .welcome-container {
         background: #20948B;
         padding: 2rem;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

      }

      .welcome-container h1 {
         color: #D3D9D4;
      }

      .get-started-btn {
         margin-top: 1.5rem;
      }

      /* #login-widget {
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 1rem;
      } */
   </style>
</head>

<body>
   <header>
      <div class="container">
         <div class="logo">
            <h1 id="family-hub-txt">ToolifyNow-Family Hub</h1>
         </div>
         <nav>
            <ul>
               <li><a href="#login" class="btn login">Login</a></li>
               <li><a href="#signup" class="btn signup">Sign Up</a></li>
            </ul>
         </nav>
      </div>
   </header>
   <div class="welcome-container">
      <h1>Welcome to ToolifyNow-Family Hub!!</h1>
      <p>Your Family management Solution to keep tasks organized and everyone connected</p>

      <button href="<?= base_url('auth/login'); ?>" class="btn btn-primary get-started-btn">Get Started
      </button>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>