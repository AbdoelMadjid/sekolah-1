<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once 'inc/auth.php';

include 'inc/header.php';
include 'inc/navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Tools</h1>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Impor Data Dapodik</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="#">Impor Data Sekolah</a></li>
                        <li><a href="#">Impor Data Murid (Peserta Didik)</a></li>
                        <li><a href="#">Impor Data PTK</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Sinkronisasi Absen</h3>
                </div>
                <div class="panel-body">
                    <p>Sinkronisasi Terakhir:</p>
                    <p>Alat: 1 - 2014-01-02 22:33:44</p>
                    <p>Alat: 2 - 2014-01-02 22:33:44</p>
                    <ul>
                        <li><a href="#">Manual Download Data Absen</a></li>
                        <li><a href="#">Upload Data RFID</a></li>
                        <li><a href="">Tambah Alat Baru</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Impor Data PAS SMA</h3>
                </div>
                <div class="panel-body">
                    <p><i>Under Development</i></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'inc/footer.php';
