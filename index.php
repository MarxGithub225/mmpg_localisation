<?php
//Titre de la page
$page ="AccueilPage";

//Inclure le header
require'include/header.php';
?>

<!--Debut du coprs de la page-->

<!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Salut,</h1>
        <h2>Veuillez selectionner votre localisation</h2>
        <form action="info-localisation.php" method="get">
          <select name="localisation" class="form-control">
            <option value="casablanca">Casablanca</option>
            <option value="fes">Fès</option>
            <option value="rabat">Rabat</option>
          </select>

          <button type="submit" name="submit" value="submit">Aller</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Fin Hero Section  -->

<!-- Fin du corps de la page -->

<?php
//Inclure le footer
require'include/footer.php';