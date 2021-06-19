
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
    
    <h1>Vue app/view/stock/viewAll</h1>
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
           printf("<tr><td>%d</td><td>%s</td><td>%s</td></tr>", $element->getCentreId(), 
             $element->getVaccinId(), $element->getQuantite());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  