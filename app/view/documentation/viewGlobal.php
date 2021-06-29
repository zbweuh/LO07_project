<?php
require($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h3>Point de vue global du projet</h3>
        
        <p>
            Concernant le projet, cela permet de consolider et confirmer les bases du MVC apprises durant le semestre. 
            C'est donc un bon exercice pour comprendre la structure. 
            Nous avions eu un peu de difficulté à trouver des innovations suffisamment originales.
            <br>
            Finalement, nous avons pensé à des solutions qui seraient pratiques et utiles.
            Avec plus de temps, nous pourrions sûrement améliorer le site. 
            Par exemple, pour la localisation on pourrait calculer la distance pour afficher le centre le plus proche du patient. Il rentrerait sa localisation.
            On pourrait également réaliser d'autres graphiques pour mettre en valeur les données ou encore faire des statistiques. Il y a encore de nombreuses choses intéressantes que l'on pourrait ajouter.
            
        </p>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>
