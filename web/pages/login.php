<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=de`vice-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/assets/css/mobile.css">
    <link rel="icon" type="image" href="assets/img/2.png">
    <title>SysGuard LogIn</title>
    
</head>
<body>
    <div class="container">
        <div class="panel">
            <div class="panelHeader">
                <h1>SysGuard Ticketing System</h1>
            </div>
            <div class="panelForm">
            <form action="<?= BASE_URL ?>login" method="GET">
                    <div class="clr clr-red">
                        <input class="ipt-ctl" type="text" id="uname" name="uname" placeholder="Username" required><br><br>
                    </div>
                    <div class="clr clr-red">
                        <input class="ipt-ctl" type="password" id="psw" name="psw" placeholder="Password" required><br>
                    </div>
                    <div class="btn btn-error">
                        <input class="button" type="submit" id="sign" value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
