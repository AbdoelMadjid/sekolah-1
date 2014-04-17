<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$this->load->helper('kwitang_fe');

$css_head[] = asset_url('css/login.css');

include FRONT_PATH.'sekolah/views/inc/header.php';
?>

<div class="container">
    <?php
    echo form_open('auth/validate', 'class="form-signin" role="form"');
    echo form_hidden('redirect_url', custom_url('dashboard'));

    echo '<div class="form-signin-logo"><img src="'.$site_logo.'" alt=""></div>';
    echo '<h2 class="form-signin-heading">'.kconfig('system', 'site_name', 'Aplikasi Sekolah').'</h2>';
    echo '<h4 class="form-signin-heading">'.kconfig('system', 'site_slogan', 'Sistem Informasi Sekolah').'</h4>';

    if (isset ($_GET['message'])) {
        echo '<div class="login-error"><div class="label label-danger">'.$_GET['message'].'</div></div>';
    }
    ?>

    <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
    <input name="password" type="password" class="form-control" placeholder="Password" required>
    <label class="checkbox">
        <input type="checkbox" name="remember" value="1"> Ingat saya
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">L o g i n</button>
    <?php
    echo form_close();
    ?>
</div>

<?php
include FRONT_PATH.'sekolah/views/inc/footer.php';
