<?php include('header.php') ?>
<h2 class="second_title">
    Modify article
</h2>

<form   method="POST" action="update_submit.php">
<div class="container1" >
    <input class="input_place1" type="text" placeholder="Saisir votre Nom" name="nom" required>
    <br>
    <input class="input_place1" type="email" placeholder="Saisir votre adresse" name="adresse" required>
    <br>
    <input class="input_place1" type="password" placeholder="Saisir votre mot de passe" name="psswd" required>
    <br>
    <input class="input_place2" type="text" placeholder="Saisir votre article" name="article">
    <button class="btn btn-primary btn-lg submit_btn" type="submit" >submit</button>
    </div>
</form>
</body>
</html>