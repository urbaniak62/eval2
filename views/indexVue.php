<?php
  include("template/header.php")
 ?>

 <table class="centered">
         <thead>
           <tr>
               <th>number of compte</th>
               <th>Name</th>
               <th>solde</th>
           </tr>
         </thead>

         <?php foreach ($compte as $key => $cpt): ?>
           <tbody>
             <tr>
               <td>1</td>
               <td>urbaniak</td>
               <td>150</td>
             </tr>
           </tbody>
         </table>
         <?php endforeach; ?>
         
 <?php
   include("template/footer.php")
  ?>
