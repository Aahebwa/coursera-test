<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 95vh;
        }

        form{
            display: flex;
            flex-direction: column;
            max-width: 520px;
            border: 2px solid #000;
            padding: 15px;
        }

        input{
            margin: 5px;
            padding: 8px;
        }

        h1{
            text-align:center;
            text-transform: capitalize;
        }

        .button{
            padding: 5px;
            background: transparent;
            text-transform: capitalize;
        }

        .button1{
            float: right;
        }
    </style>
</head>
<body>
    
    <form action="form.php" method="POST">

        <h1>please register here</h1>

        <div>
            <label for="fname">FName:</label>
            <input type="text" name="fname">
        </div>
        
        <div>
            <label for="lname">LName:</label>
            <input type="text" name="lname">
        </div>
        

        <table>
            <tr>
                <td rowspan="2" width="30px">Gender</td>
                <td><input type="radio" name="gender">female
            </tr>
            <tr>
                <td><input type="radio" name="gender">male</td>
            </tr>
        </table>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>
        
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username">
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
            <button class="butto" name="resetPassword" value="reset password">reset Password</button>
        </div>
        
        <div>
            <button class="button" name="register">register</button>
            <button class="button1 button" name="cancel">cancel</button>
        </div>
        

    </form>

</body>
</html>