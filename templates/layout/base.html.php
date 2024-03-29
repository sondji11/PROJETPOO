<?php

use App\Core\Constantes;
use App\Core\Role;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=Constantes::WEB_ROOT.'css/style.css'?>">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    
<?php 
    if(isset($menu_for_users))
    {
        echo $menu_for_users;
    }
    ?>



    <!-- <ul class="nav justify-content-end mt-1">
        <li class="nav-item">
            <a class="nav-link active" href="">Personne</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="">Deconnexion</a>
        </li>
    </ul> -->


    

<?=$content_for_views?>
 

<script src=""></script>



<script src="<?=$Constantes::WEB_ROOT."bootstrap/js/bootstrap.min.js";?>"></script>
    <script src="<?=$Constantes::WEB_ROOT."js/script.js";?>"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>