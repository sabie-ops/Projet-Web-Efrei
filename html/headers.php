<?php
$current_page = basename($_SERVER['PHP_SELF']); // get current page filename
echo "<header>
    <img src='../image/efre8logo.png' alt='logo efrei' class='logo'>
    <nav>";
    
    $menu = [
        'accueil.php' => 'ACCUEIL',
        'formation.php' => 'FORMATION',
        'asso.php' => 'VIE ASSOCIATIVE',
        'enseignante.php' => 'EQUIPE ENSEIGNANTE',
        'contact.php' => 'CONTACT',
        'carrière.php' => 'CARRIERE'
    ];
    
    foreach($menu as $file => $title){
        $active = ($current_page == $file) ? 'active' : '';
        echo "<a href='./$file' class='$active'>$title</a>";
    }
    
echo "</nav>
</header>";
?>