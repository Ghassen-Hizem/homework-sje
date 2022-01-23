<?php include('header.php') ?>
<h1 class="title">
    Thank you for submitting !
</h1>
<?php
$db_host="localhost";
$db_name="article_sje";
$db_username="root";
$db_password="";
$db=new pdo('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_password);
$query="INSERT INTO articles (nom,adresse,psswd,article) VALUES (?,?,?,?)";
$stmt=$db->prepare($query);
$data=[$_POST["nom"],$_POST["adresse"],md5($_POST["psswd"]),$_POST["article"]];
$stmt->execute($data);

?>
</body>
</html>