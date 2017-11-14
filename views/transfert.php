<?php require_once('template/header.php'); ?>

<form action="" method="post">
<a class='dropdown-button btn red accent-4' href='#' data-activates='dropdown1'>select account to debite</a>
<ul id='dropdown1' class='dropdown-content '>
  <?php foreach ($compte as $cpt): ?>
  <li><a href="../controllers/transfert.php?name=<?php echo $cpt['name'];?>"><?php echo $cpt['name'] ?></a></li>
   <?php endforeach; ?>
</ul>
 <?php if (isset($_GET['name'])) { ?>
   <input type="text" name="somme1" value="<?php echo $_GET['name']; ?>">
 <?php } ?>

  <button type="text">select account to credite : </button>
<select>
  <?php foreach ($compte as $cpt): ?>
    <option><?php echo $cpt['name']; ?></option>
  <?php endforeach; ?> 
</select>

   <input type="text" name="somme2" value="" placeholder="somme">
   <input type="hidden" name="id" value=" <?php echo $cpt['id']; ?>">
   <a href="#"><input type="submit" name="transfert" value="transfert"></a>
 </form>
 <div class=" container img">
      <img src="../assets/img/caisseDepargne.jpg" alt="">
</div>



<?php require_once('template/footer.php');?>
