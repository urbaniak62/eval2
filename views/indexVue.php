<?php
  include("template/header.php")
 ?>

 <table class="centered bordered striped">
         <thead>
           <tr>
               <th>number of compte</th>
               <th>Name</th>
               <th>solde</th>
           </tr>
         </thead>

         <?php foreach ($compte as $cpt): ?>
           <tbody >
             <tr>
               <td><?php echo $cpt['id'];  ?></td>
               <td><?php echo $cpt['name']; ?></td>
               <td><?php echo $cpt['sold']; ?></td>
             </tr>
           </tbody>
          <?php endforeach; ?>
  </table>


    <a class='dropdown-button btn red accent-4' href='#' data-activates='dropdown1'>select account</a>

    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content '>
      <?php foreach ($compte as $cpt): ?>
    <li><a href="../controllers/oneCompte.php"><?php echo $cpt['id'] ?></a></li>
       <?php endforeach; ?>
    </ul>


  <?php
   include("template/footer.php")
  ?>
