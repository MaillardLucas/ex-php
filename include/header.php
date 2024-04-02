<?php
require_once 'menu.php';
    $page = basename($_SERVER["PHP_SELF"]);
    $resultat = Menu::getMenu();
?>
<header>
    <div class="logo-container">
        <img class="logo" src="<?php if ($page != 'index.php'){ echo '../';} ?>img/new_logo.jpg" alt="Logo" title="Logo"/>
        <h1 class="title-header">Actualités</h1>
    </div>
    <div class="nav-container">
        <nav>
            <?php
                if ($page == 'index.php') {
                    echo '<a href="index.php">Accueil</a>';
                    echo '<a href="pages/admin.php">Administration</a>';
                } else{
                    echo '<a href="../index.php">Accueil</a>';
                    echo '<a href="admin.php">Administration</a>';
                }
                
                // Affichage du menu déroulant
                echo '<div class="dropdown">';
                echo '<button class="dropbtn">Menu</button>';
                echo '<div class="dropdown-content">';
                
                // Récupération des éléments du menu depuis la base de données
                foreach($resultat as $menu) {
                    echo '<a href="' . $menu["url"] . '">' . $menu["nom"] . '</a>';
                }
                
                echo '</div>';
                echo '</div>';
            ?>
        </nav>
    </div>
</header>
