<?php if(isset($_SESSION['message'])): ?>
  <center><div class="alert alert-dismissible alert-<?php echo $_SESSION['type']; ?>" role="alert">
  <i class="fa fa-check-circle fa-7x"  aria-hidden="true"></i>

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h3><?php echo $_SESSION['message']; ?>  <?php echo $_SESSION['username']; ?></h3>
  
    <hr>
     <p> നിങ്ങൾ രജിസ്റ്റർ ചെയ്ത വിവരങ്ങൾ അറിയുവാനയി താഴെ കാണുന്ന ബട്ടണിൽ ക്ലിക്ക് ചെയ്യുക. <br><br> <a href="profile.php" class="btn btn-primary">എൻ്റെ അക്കൗണ്ട്</a></p>
    <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
    ?>
  </div></center>
<?php endif; ?>