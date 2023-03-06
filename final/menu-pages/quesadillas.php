<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Quesadillas';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/navbar.php'; ?>

<?php 
    // $menuItem_byId = array(3, 7, 15, 19);
    // $query = 'SELECT * FROM menu WHERE id = 1';
    // $query = "SELECT * FROM menu WHERE id IN (" . implode(",", $menuItem_byId) . ")";
    $query = "SELECT * FROM menu WHERE menu_category = 'quesadilla'";
    $result = mysqli_query($db_connection, $query);
?>

<?php

 echo "<div class='category-page-wrapper'>";
 echo "<div class='category-header'>";
 echo "<div class='category-container'>";
 echo "<div class='back-btn-container'>";
 echo "<a class='text-decoration-none' href='../index.php'>";
 echo "<div class='back-btn'>";
 echo "<i class='fas fa-arrow-left back-btn-arrow'></i>";
 echo "</div>";
 echo "</a>";
 echo "</div>";
 echo "<h1 class='category-title'>Quesadillas</h1>";
 echo "</div>";
 echo "</div>";
 
 while ($menu_item = mysqli_fetch_assoc($result)) {
     // Display each item as a card or tile
     echo "<div class='category-item-container'>";
     echo "<div class='category-item-imgcontainer'>";
     echo "<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'> ";
     echo "</div>";

     echo "<div class='category-item-flexcolumn'>";
     echo "<div class='category-item-flexrow'>";
     echo "<p class='category-item-title'>" . $menu_item['name'] ."</p>";
     echo "<i class='fas fa-plus category-item-btn'></i>";
     echo "</div>";

     echo "<p class='category-item-row'>";
     echo "<a href='taco-korean-overlay.html'>";
     echo "<span class='category-item-details'>Click for details</span>";
     echo "</a>";
     echo "<span class='category-item-flexprice'>" . price_with_dollar_sign($menu_item['price']) . "</span>";
     echo "</p>";
     echo "</div>";
     echo "</div>";
 }
 
 echo "</div>";
?>