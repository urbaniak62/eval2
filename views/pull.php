<?php require_once('template/header.php') ?>

<p>compte a debiter : </p>
<a class='dropdown-button btn red accent-4' href='#' data-activates='dropdown1'>select account to pull</a>
<ul id='dropdown1' class='dropdown-content '>
  <?php foreach ($compte as $cpt): ?>
<li><a href="../controllers/pull.php?name=<?php echo $cpt['name'];?>"><?php echo $cpt['name'] ?></a></li>
   <?php endforeach; ?>
 </ul>
 <?php if (isset($_GET['name'])) { ?>
   <input type="text" name="" value="<?php echo $_GET['name']; ?>">
 <?php } ?> 

<?php require_once('template/footer.php') ?>
