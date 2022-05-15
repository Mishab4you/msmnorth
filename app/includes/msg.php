<?php if(isset($_SESSION['message'])): ?>
  <center><div class="alert alert-dismissible alert-<?php echo $_SESSION['type']; ?>" role="alert">
  <i class="fa fa-check-circle fa-7x"  aria-hidden="true"></i>

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <li><?php echo $_SESSION['message']; ?> </li>
  
  <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
    ?>
  </div></center>
<?php endif; ?>