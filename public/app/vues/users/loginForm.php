<?php
/*
  ./public/app/vues/users/loginForm.php
  FORMULAIRE DE CONNEXION

 */
?>
<div class="">
  <h2>Connexion au backoffice</h2>
   <!-- 1 : action et method ajoutée à <form> -->
  <form action="users/login/submit" method="post">
  <div class="form-group">
    <label for="login">Login</label>
    <input type="text" name="login" class="form-control" id="login" aria-describedby="loginHelp" placeholder="Enter login">
    <small id="loginHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
