<?php
function renderBreadcrumb($title, $breadcrumbs) {
    $breadcrumbItems = '';
    foreach ($breadcrumbs as $breadcrumb) {
        $svg = '';
        if (isset($breadcrumb['svg'])) {
            $svg = <<<SVG
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" id="caret-right">
                    <rect width="256" height="256" fill="none"></rect>
                    <polyline fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="24" points="96 48 176 128 96 208"></polyline>
                </svg>
            SVG;
        }

        $breadcrumbItems .= <<<HTML
            <a class="breadcrumb-card__box__menu__item__link" href="{$breadcrumb['url']}">
                $svg
                {$breadcrumb['text']}
            </a>
        HTML;
    }

    echo <<<HTML
    <div class="breadcrumb-card">
        <div class="breadcrumb-card__box">
            <h1 class="breadcrumb-card__box__title">$title</h1>
            <ul class="breadcrumb-card__box__menu">
                $breadcrumbItems
            </ul>
        </div>
    </div>
    HTML;
}
