<!DOCTYPE HTML PUBlIC>
<html>
        <head>
        <meta charset="UTF-8">
        <title>login.php</title>
        </head>
        <style>
            * {
              box-sizing: border-box;
            }
            
            body {
              font-family: Arial, Helvetica, sans-serif;
            }
            
            /* Style the header */
            header {
              background-color: #666;
              padding: 30px;
              text-align: center;
              font-size: 35px;
              color: white;
            }
            </style>
        <body>
            <header>
                <h2>EEbook</h2>
              </header>
        <body>
          สมาชิก ชื่อ
          E-mail : <?php echo $_POST["email"];?>
         
         <a href = "Home.html">ออกจากระบบ</a>
          
        </body>
</html>