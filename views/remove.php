<?php require_once('template/header.php') ?>

<!-- select account to remove -->


<a class='dropdown-button btn red accent-4' href='#' data-activates='dropdown1'>select account to debite</a>
<ul id='dropdown1' class='dropdown-content '>
  <?php foreach ($compte as $cpt): ?>
  <li><a href="../controllers/remove.php?name=<?php echo $cpt['name'];?>"><?php echo $cpt['name'] ?></a></li>
   <?php endforeach; ?>
</ul>
 <?php if (isset($_GET['name'])) { ?>
   <input type="text" name="" value="<?php echo $_GET['name']; ?>">
 <?php } ?>
 <form class="" action="#" method="post">

<!-- select sold to remove -->

   <input type="text" name="somme" value="">
   <input type="hidden" name="id" value=" <?php echo $cpt['id']; ?>">
   <a href="../controllers/index.php"><input type="submit" name="remove" value="remove"></a>
 </form>
  <div class=" container img">
      <img src="../assets/img/caisseDepargne.jpg" alt="">
  </div>


<?php require_once('template/footer.php') ?>
