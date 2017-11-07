<?php
  include("template/header.php")
 ?>

 <table class="centered">
         <!-- <thead> -->
           <tr>
               <th>number of compte</th>
               <th>Name</th>
               <th>solde</th>
           </tr>
         <!-- </thead> -->

         <?php foreach ($compte as $cpt): ?>
           <tbody>
             <tr>
               <td><?php echo $cpt['id']  ?></td>
               <td><?php echo $cpt['name'] ?></td>
               <td><?php echo $cpt['sold'] ?></td>
             </tr>
           </tbody>
          <?php endforeach; ?>
  </table>


           <div class="action">
             <a href="send.php">send money</a>
             <a href="transfert.php">execute transfert</a>
             <a href="delete.php">delete</a>
           </div>
           <select class="choice" name="id">
             <option value="1">1</option>

           </select>


 <!-- <?php
   include("template/footer.php")
  ?> -->
