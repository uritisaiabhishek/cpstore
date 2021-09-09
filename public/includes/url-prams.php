<?php
    // echo "<pre>";
    if(isset($_GET['parameter']) && $_GET['parameter']!=''){
        $urlArr=explode("/",$_GET['parameter']);
        // print_r($urlArr);
        // $url = $_SERVER['REQUEST_URI'];
        // $url = "http://localhost/cp-store/store?size=medium&price%5B%5D=from%3D1000&price%5B%5D=to%3DMax&color%5B%5D=red&color%5B%5D=yellow&color%5B%5D=blue";
        // $url_components = parse_url($url);
        // parse_str($url_components['query'], $params);
        // print_r($params);
    }

?>