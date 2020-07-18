<?php
    echo __FILE__;
    $content = '<h1>hogehoge < as  & hoge</h1>';
    $content = wp_kses_post( $content ); 


?>