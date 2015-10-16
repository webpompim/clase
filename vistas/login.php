<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
            *{
                margin: 0;
                padding: 0;
            }   
            body{
                background: gray;
                font-family: arial;
            }
            header{
                width: 100%;
             }
             from{
                 border: #fff;
             }
 
        </style>
    </head>
    <body>
        <header> 
            <form action="login.php" method="POST">
Usuario: <input type="text" name="user" size="15">
Contraseña: <input type="password" name="pass" size="15">

<input type="submit" value="Login">
        
        </header>
    </body>
</html>
