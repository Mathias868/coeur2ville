<?php
$url_page = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
?>
<style>
    html,body{height:100%;
        margin: 0;padding: 0;
    }
    .inner{
        margin: 0;padding: 0;
    }

    body {
        min-height: 110vh;
        background-attachment:fixed;

        background-image: url("../../../public/photoVille.png");


    }
    #logoCoeur{
        fill: red;
        width: 50%;
        margin: 0;padding: 0;
    }

    .acceuilMenu{
        background-color: orange;
        width: 100%;
        height: 66px;
        line-height: 66px ;
    }
    .m_left{
        float: left;
    }
    .m_right{
        float: right;
    }
    .nav-item{
        text-decoration:none;
        padding: 0;
        margin: 0 15px;
        transition: all 0.3s ease-in-out;
        border-bottom: 2px solid transparent;
    }
    .nav-item:hover{
        padding-bottom: 3px;
        border-color: #fff;
    }
</style>
<!-- Navbar-->
<header role="header">
    <nav role="navigation" class="acceuilMenu">
        <div class="inner">


            <div class="m_left">

                 <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Coeur 2 ville</a></div>
            </div>
            <div class="m_right">

                <a href="#" class="nav-item">Acceuil</a>
                <a href="#" class="nav-item">Rechercher</a>
                <a href="#" class="nav-item">Actualités</a>
                <a href="#" class="nav-item">Contact</a>
                <a href="#" class="nav-item">+ Ajouter</a>
                <a href="#" class="nav-item">Ce connecter</a>

            </div>

        </div>

    </nav>
</header>
