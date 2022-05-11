<?php
require(__DIR__ . "/../../partials/nav.php");
$db = getDB();

$per_page = 8;

$statement = $db->prepare("SELECT COUNT(*) as numrows FROM Products");
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);

$pages = ceil($result["numrows"]/$per_page);

$page = 1;
if(isset($_GET["page"])){
    $page = $_GET["page"];
}

$offset = ($page - 1) * $per_page;

$statement = $db->prepare("SELECT * FROM Products
LIMIT :offset, :perpage");
$statement->bindValue(":offset", $offset, PDO::PARAM_INT);
$statement->bindValue(":perpage", $per_page, PDO::PARAM_INT);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
    echo $row["id"] . " " . $row["name"] . "<br>" ;
}

for($page=1; $page <= $pages; $page++){
    echo '<a href="index_paginate.php?page=' . $page . '">' . $page . '</a>';
}

?>