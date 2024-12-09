<html>
 <head>
  <title>
   Register
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            background-color: #7B1F1F;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            background-image: url('https://placehold.co/800x600');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .navbar {
            width: 100%;
            background-color: #7B1F1F;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 0;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .navbar .right {
            display: flex;
        }
        .navbar .right a {
            background-color: #D9534F;
            padding: 5px 5px;
            border-radius: 5px;
        }
        .container {
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 400px;
        }
        .container img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .container h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container a {
            color: #007BFF;
            text-decoration: none;
            display: block;
            margin-bottom: 20px;
        }
        .container button {
            background-color: #D9534F;
            color: white;
            padding: 5px;
            border: none;
            border-radius: 5px;
            width: 50%;
            cursor: pointer;
        }
  </style>
 </head>
 <body>
  <div class="navbar">
   <div class="left">
    <a href="<?= url() ?>">
     Navbar
    </a>
   </div>
   <div class="right">
    <a href="<?= url('auth/register') ?>">
     Register
    </a>
    <a href="<?= url('auth') ?>">
     Login
    </a>
   </div>
  </div>
  <div class="container">
   <h1>
    Tracking
   </h1>
   <img alt="Tracking icon" height="100" src="https://storage.googleapis.com/a1aa/image/96kJwvXewflGaUXFPipEgkJWQM341jKbewhlP2o3NCd9UHunA.jpg" width="100"/>
   <h2>
    Register
   </h2>
   <input placeholder="NIM/NIP/ID" type="text"/>
   <input placeholder="No Telepon" type="text"/>
   <input placeholder="Email" type="email"/>
   <input placeholder="Password" type="password"/>
   <a href="#">
    Lupa Password ?
   </a>
   <button>
    Sign in
   </button>
  </div>
 </body>
</html>
