<?php
# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
## cdn
//      $jquery_cdn = '//code.jquery.com/jquery-2.2.3.min.js';
 $bootstrapJS_cdn = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
$bootstrapCSS_cdn = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
 $ceruleanCSS_cdn = '//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css';
 $fontawesome_cdn = '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
## 4.1
 $bootstrapJS_413 = '//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js';
$bootstrapCSS_413 = '//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css';
 $ceruleanCSS_413 = '//maxcdn.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min.css';
 $fontawesome_510 = '//use.fontawesome.com/releases/v5.1.0/css/all.css';
## local
            $sumber = 'sumber/utama/';
      $jquery_local = $sumber . 'jquery/jquery-2.2.3.min.js';
 $bootstrapJS_local = $sumber . 'bootstrap/3.3.7/js/bootstrap.min.js';
$bootstrapCSS_local = $sumber . 'bootstrap/3.3.7/css/bootstrap.min.css';
 $fontawesome_local = $sumber . 'font-awesome/4.7.0/css/font-awesome.min.css';
$datatablesCSS_local = $sumber . 'datatables/1.10.19/css/jquery.dataTables.min.css';
$datatablesJSS_local = $sumber . 'datatables/1.10.19/js/jquery.dataTables.min.js';

## datatables
$datatablesCSS = '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css';
$jquery_cdn = '//code.jquery.com/jquery-3.3.1.js';
$datatablesJSS = '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js';
$searchHighlightCSS = '//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/dataTables.searchHighlight.css';
$searchHighlightJSS = '//cdn.datatables.net/plug-ins/1.10.11/features/searchHighlight/dataTables.searchHighlight.min.js';
#############################################################################################################
$urlcss = array($bootstrapCSS_413,$fontawesome_510,$datatablesCSS,$searchHighlightCSS);
$urljs = array($jquery_cdn,$bootstrapJS_413,$datatablesJSS,$searchHighlightJSS);
#############################################################################################################