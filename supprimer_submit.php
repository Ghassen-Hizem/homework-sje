<?php include('header.php') ?>
<?php
$db_host="localhost";
$db_name="article_sje";
$db_username="root";
$db_password="";
$db=new pdo('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_password);
$n=$_POST['nom'];
$a=$_POST['adresse'];
$p=$_POST['psswd'];
$p=md5($p);
$sql = "SELECT nom,adresse,psswd FROM articles WHERE nom='$n' AND adresse='$a' AND psswd='$p'";
$result = $db->prepare($sql);
$result->execute();
$tab = $result->fetchAll();
if (count($tab)>0) {
    $s = "DELETE FROM articles WHERE nom='$n' AND adresse='$a' AND psswd='$p'";
    $r = $db->prepare($s);
    $r->execute();
    echo "<h1 class='title'>article deleted successfully</h1>";
}
else{
    echo "<h1 class='title'>l'article n'existe pas</h1>";
}

?>

</body>
</html>