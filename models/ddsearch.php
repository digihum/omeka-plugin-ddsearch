<?php
class ddsearch
{
    public static function getSearchFormHTML()
    {
        // This method constructs the HTML that will replace 
        // the native Omeka search form with a ddsearch one

        $url = parse_url(absolute_url());
        $divStart = '<div id="search-container" role="search">';
        $form = '<form method="get" id="search-form" name="search-form" action="https://duckduckgo.com/">';
        $inputType = '<input type="hidden" name="sites" value="'. $url['host'] . '"/>';
        $inputClass = '<input class="search" type="text" name="q" maxlength="300" placeholder="Search"/>';
        $searchButton = '<button name="submit_search" id="submit_search" type="submit" value="Search">Search</button>';
        $formEnd = '<input name="submit_search" id="submit_search" type="submit" value="Search" style="display: hidden;" /></form>';
        $divEnd = "</div>";

        $html = $divStart . $form . $inputType . $inputClass . $formEnd . $divEnd;

        return $html;
    }
}
?>
