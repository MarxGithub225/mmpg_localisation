  <!-- Footer -->
  <section id="footer">
      <div class="footer container">
        <div class="brand"><h1>MMPG</h1></div>
      
        <p>Copyright © <script>document.write( new Date().getFullYear())</script> <a href="http://mn.app-djassa.com">Marx N'Guessan</a></p>
        <p>
          <strong><?php include 'config/recuperer-nombre_visite.php'; ?></strong> Visite(s) sur cette page
        </p>
      </div>
  </section>
    <!-- Fin Footer -->
    
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <?php
  if($page =="AccueilPage"){
    ?>
    <script src="Src/js/localisation.js"></script>
    
    <?php
  }
  ?>
  <script src="Src/js/app.js"></script>
  
</body>
</html>