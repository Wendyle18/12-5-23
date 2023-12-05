<?php


require ("_config.php");
require (DATA."pages.php");
require (DATA."users.php");
require (DATA."roles.php");
require (DATA."role_privileges.php");


$error = false;
$page = $pages ["dashboard"];
$urlSegments = explode ("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if (array_key_exists ("3", $urlSegments)&& !empty ($urlSegments[3]) ){    
    if (array_key_exists ($urlSegments[3], $pages)){
        $page = $pages[$urlSegments [3]];
    }  
    else{ 
        $page = $pages ["404"];
        $error = true;
    } 

}

?>
<!DOCTYPE html>

<!--suppress HtmlDeprecatedAttribute -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH ?>fontawesome/fontawesome.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>fontawesome/solid.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>main.css">
    <link rel="stylesheet" href="<?= CSS_PATH. $page["stylesheet"]?>">
    <link rel="icon" type="image" href="<?= IMG_PATH ?>2.png">
    <title><?= $page["title"] ?></title>
</head>

        <body>
            
                <?php 
                    if($error){
                        require (PAGE_PATH. DS.$page["file"]);
                    }elseif($page == $pages["login"]){
                        require (PAGE_PATH. DS.$page["file"]);
                    }
                    else{
                        require ( ELEMENTS."header.php");
                        require ( ELEMENTS."sidebar.php");
                        require ( PAGE_PATH .$page["file"]);
                        require ( ELEMENTS."footer.php");
                    }
                           
                     
                            
                        
                ?>
        </body>
        
</html>


<?php 
/*
    $page = "pages/dashboard.php";
    $style= "/web/assets/css/dashboard.css";
    $error = false;
    $pages = array ("dashboard", "admin", "profile", "editProfile", "logOut");
    $urlSegments = explode ("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if (array_key_exists ("3", $urlSegments) ){
        switch ($urlSegments[3]){

            case "dashboard":
                                $page = "pages/dashboard.php";
                                $style = "/web/assets/css/dashboard.css";
                                break;
            case "admin":
                                $page = "pages/mobileadmin.php";
                                $style = "/web/assets/css/mobileadmin.css";
                                break;
            case "profile": 
                                $page = "pages/mobileProfile.php";
                                $style = "/web/assets/css/mobileprofile.css";
                                break;
            case "editProfile":
                                $page = "pages/editMobile.php";
                                $style = "/web/assets/css/editMobile.css";
                                break;
            case "logOut":
                                $page ="pages/mobile.php";
                                $style = "/web/assets/css/mobile.css";
                                break;
            default:
                                $error = true;
                                $page = "pages/404.php";
                                $style = "/web/assets/css/404.css";

        }
    }

?>

<!DOCTYPE html>

<!--suppress HtmlDeprecatedAttribute -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/assets/css/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="/web/assets/css/fontawesome/solid.css">
    <link rel="stylesheet" href="/web/assets/css/main.css">
    <link rel="stylesheet" href="<?= $style ?>">
    <link rel="icon" type="image" href="/web/assets/img/2.png">
    <title></title>
</head>

        <body>
            
                <?php 
                        if(!$error){
                            require ("elements/header.php");
                            require ("elements/sidebar.php");
                            require ($page);
                            require ("elements/footer.php");
                        }else{
                            require ($page);
                        }
                ?>
        </body>
        
</html>
*/