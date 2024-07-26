<?php
function setActive($href, $page)
{
  if (empty($page)) {
    return null;
  }
  $hrefWithoutPhp = str_replace('.php', '', $href);
  return $hrefWithoutPhp === $page;
}

function academicDivisionNavigation($topLinks, $bannerImage, $academicDivision, $departments, $page)
{
  $topLinksHtml = '';
  foreach ($topLinks as $link) {
    if ($link['show']) {
      $isActive = setActive($link['href'], $page) ? 'active' : '';
      $topLinksHtml .= "<li class=\"$isActive\"><a href=\"{$link['href']}\">{$link['title']}</a></li>";
    }
  }

  $departmentsHtml = '';
  foreach ($departments as $department) {
    if ($department['show']) {
      $isActive = setActive($department['href'], $page) ? 'active' : '';
      $departmentsHtml .= "<li class=\"$isActive\"><a href=\"{$department['href']}\">{$department['title']}</a></li>";
    }
  }

  return <<<HTML
    <div id="academic-division-data">
      <ul id="academic-division-data-top">
        $topLinksHtml
      </ul>
      <img src="$bannerImage" id="academic-division-data-background" alt="RMMC">
      <ul id="academic-division-data-bottom">
        <li><a href="#" class="isActive">$academicDivision</a></li>
        <ul id="academic-division-data-bottom-departments">
          $departmentsHtml
        </ul>
      </ul>
    </div>
  HTML;
}

$topLinks = [
  ["href" => "academic-division.php", "title" => "HOME", "show" => true],
  ["href" => "academic-division-academic-programs.php", "title" => "ACADEMIC PROGRAMS", "show" => true],
  ["href" => "academic-division-faculty-and-staff.php", "title" => "FACULTY AND STAFF", "show" => true],
  ["href" => "academic-division-organizational-chart.php", "title" => "ORGANIZATIONAL CHART", "show" => true]
];

$bannerImage = "assets/img/breadcumb/CETNEWBKG.png";
$academicDivision = "COLLEGE OF ENGINEERING AND TECHNOLOGY";

$departments = [
  ["href" => "#", "title" => "ITE", "show" => true],
  ["href" => "#", "title" => "CE", "show" => true]
];

echo academicDivisionNavigation($topLinks, $bannerImage, $academicDivision, $departments, $page);
