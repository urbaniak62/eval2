<?php require_once('template/header.php'); ?>

<div class="container ">
          <div class="col s12 m12 l12 ">
            <div class="card red darken-4">
              <div class="card-content white-text">
                <span class="card-title">compte : <?php echo $compte['name'] ; ?></span>
                <p> solde du compte : <?php echo $compte['sold']; ?></p>

              </div>
              <div class="card-action">
              <form class="" action=""method="post">
                <a href="../controllers/index.php">go back</a>

                
                <!-- slect account to dellete -->


                <input type="hidden" name="id" value="<?php echo $compte['id']; ?>">
                <a href="../controllers/index.php"><input type="submit" name="delete" value="delete"></a>
              </form>
              </div>
            </div>
          </div>
        </div>
 </div>


  <div class=" container img">
      <img src="../assets/img/caisseDepargne.jpg" alt="">
  </div>
 

<?php require_once('template/footer.php'); ?>
