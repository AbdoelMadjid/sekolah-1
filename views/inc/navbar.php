<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-home"></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo custom_url('sekolah'); ?>">Sekolah</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Buku Induk <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Buku Induk Siswa</a></li>
                        <li><a href="#">Buku Induk Keadaan Jasmani</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Pendidik &amp; Tenaga Kependidikan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Absensi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo custom_url('absensi/peserta_didik'); ?>">Peserta Didik</a></li>
                        <li><a href="<?php echo custom_url('absensi/ptk'); ?>">PTK</a></li>
                    </ul>
                </li>
            </ul>

            <div class="nav navbar-nav navbar-right">
                <table width="100%" style="border-collapse:collapse;border:0;padding:0;margin:0;width:100%">
                    <tr>
                        <td><span class="navbar-text">&nbsp;&nbsp;&nbsp;<?php echo $current_user->fullname; ?></span></td>
                        <td><a class="navbar-text" href="<?php echo custom_url('tools'); ?>"><span class="glyphicon glyphicon-th-large"></span></a></td>
                        <td><a class="navbar-text pull-right" href="<?php echo site_url('auth/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout &nbsp;&nbsp;&nbsp;</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</nav>
