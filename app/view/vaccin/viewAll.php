
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

        <h1>Liste des vaccins:</h1>
        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">id</th>
                    <th scope = "col">label</th>
                    <th scope = "col">doses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // La liste des vaccins est dans une variable $results             
                foreach ($results as $element) {
                    printf("<tr><td>%d</td><td>%s</td><td>%d</td></tr>", $element->getId(),
                            $element->getLabel(), $element->getDoses());
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewAll -->


