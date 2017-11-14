<?php require_once('template/header.php'); ?>

<form action="" method="post">

<!-- select account to remove -->

<label for="">compte à debiter</label>
<select name="debiteur">
  <?php foreach ($compte as $cpt): ?>
    <option value="<?php echo $cpt['id']; ?>" ><?php echo $cpt['name'] . " " . $cpt['sold'] . " euros"; ?></option>
  <?php endforeach; ?> 
</select>
<br>
<br>

<!-- select account to pull -->
 
<label for="">compte à crediter</label>
  <select name="crediteur">
  <?php foreach ($compte as $cpt): ?>
    <option value="<?php echo $cpt['id']; ?>" ><?php echo $cpt['name'] . " " . $cpt['sold'] . " euros"; ?></option>
  <?php endforeach; ?> 
  </select>

  <br>
  <br>
<!-- select sold to transfer -->
   <label for="">montant à transferer</label>
   <input type="text" name="somme3" value="" placeholder="somme">
   <input type="hidden" name="id" value=" <?php echo $cpt['id']; ?>">
   <a href="#"><input type="submit" name="transfert" value="transfert"></a>
 </form>
 <div class=" container img">
      <img src="../assets/img/caisseDepargne.jpg" alt="">
</div>



<?php require_once('template/footer.php');?>
