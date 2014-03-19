<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
* File: inc/header.php
*
* Common header.
* Variables:
* - $page_title
* - $page_desc
* - $page_tags
* - $css_head
* - $js_head
*/
$page_title = isset($page_title) ? $page_title : kconfig('system', 'site_name', 'Terang Bangsa');
$page_desc  = isset($page_desc) ? $page_desc : kconfig('system', 'site_slogan', 'Sekolah Terang Bangsa');
$page_tags  = isset($page_tags) ? $page_tags : kconfig('system', 'site_keywords', 'sekolah,sd,smp,sma,cirebon,kristen,terang bangsa');
$favicon    = '';
$site_logo  = '';

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo isset ($page_desc) ? $page_desc : ''; ?>">

<?php
echo '    <link rel="shortcut icon" href="'.$favicon.'">'."\r\n";
echo '    <title>'.$page_title.'</title>'."\r\n";
?>

    <link href="<?php echo asset_url('css/bootstrap-yeti.min.css'); ?>" rel="stylesheet">
<?php
if (! empty($css_head) and is_array($css_head)) {
    foreach ($css_head as $value) {
        echo '    <link href="'.$value.'" rel="stylesheet">'."\r\n";
    }
}
?>
    <script src="<?php echo asset_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
</head>

<body>
