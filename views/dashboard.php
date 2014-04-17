<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once 'inc/auth.php';

// Load DataSekolah
$CI =& get_instance();
$sekolah_id    = user_config($current_user->username, 'sekolah_id', 1);
$sekolah_model = $CI->kwitang->ctModel('DataSekolah', 'DataSekolahM');
$sekolah       = $sekolah_model->get($sekolah_id);

include 'inc/header.php';
include 'inc/navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Absensi Anak Didik</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Absensi PTK</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Identitas Sekolah</h3>
                </div>
                <div class="panel-body">
                    <?php
                    var_dump($sekolah);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'inc/footer.php';
