
<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h1>liste des stocks:</h1>
        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">Centre</th>
                    <th scope = "col">Vaccin</th>
                    <th scope = "col">Quantité</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // La liste des centres est dans une variable $results             
                foreach ($results as $element) {
                    printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $element[0], $element[1], $element[2]);
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewAll -->


