<?php include('header.php') ?>
<?php
$db_host="localhost";
$db_name="article_sje";
$db_username="root";
$db_password="";
$db=new pdo('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_password);
$sql = "SELECT * FROM articles ";
$result = $db->prepare($sql);
$result->execute();
$tab = $result->fetchAll();
foreach($tab as $a){
    echo "<p class='parag'>$a[4]</p>";
}
?>
</body>
</html>