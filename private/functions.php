<?php 

require_once 'lib/parsedown-1.7.4/Parsedown.php';

function u($string = "") {
    return urldecode($string);
}

function raw_u($string = "") {
    return rawurldecode($string);
}

function h($string = ""){
    return htmlspecialchars($string);
}

function md($text_url) {
    $parsedown = new Parsedown();
    return $parsedown->text(file_get_contents($text_url));
}

function url_for($script_path) {
    // add the leading '/' if not present
    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function redirect_to($location) {
    header("Location: " . $location);
    exit;
}

function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function render_lesson_content($title) {
    $content =  '<li>';
    $content .= "<h2 id=\"$title\">$title</h2>";
    $content .= '<p>';
    $content .=  md("notes/$title.md");
    $content .= '</p>';
    $content .= '<a href=\"#top\">--top--</a>';
    $content .= '<hr />';
    $content .= '</li>';

    echo $content;
   }




?>