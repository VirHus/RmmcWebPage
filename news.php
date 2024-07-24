<?php
$page = 'news';
require 'header.php';

include "nav-bar.php";
include 'breadcrumb.php';

renderBreadcrumb('OUR NEWS', [
  ['url' => 'index.php', 'text' => 'Home'],
  ['url' => 'index.php', 'text' => 'News', 'svg' => true],
]);
?>
<div class="news_card_box">
  <!-- Insert news cards here -->
</div>

<div class="carousel">
  <button class="carousel__carousel_Btn">1</button>
  <button class="carousel__carousel_Btn">2</button>
  <button class="carousel__carousel_Btn">3</button>
  <button class="carousel__carousel_Btn"><i class='fas fa-arrow-right'></i></button>
</div>

<?php include "footer.php" ?>
