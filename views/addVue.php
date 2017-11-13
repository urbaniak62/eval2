<?php require_once('template/header.php') ?>

  <div class="row">
    <form class="col s12" method="post">

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="name"class="validate">
          <label for="name">name of account</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">attach_money</i>
          <input id="icon_telephone" type="text" name="sold" class="validate">
          <label for="solde">solde</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light red accent-4" type="submit" name="submit">Submit
        <i class="material-icons right">send</i>
      </button>

    </form>
    <div class=" container img">
      <img src="../assets/img/caisseDepargne.jpg" alt="">
    </div>

  </div>

<?php require_once('template/footer.php') ?>
