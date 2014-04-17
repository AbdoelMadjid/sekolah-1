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
            <h1>Sekolah</h1>
        </div>

        <div class="container">
            <?php

            $CI =& get_instance();
            $sekolah_id    = user_config($current_user->username, 'sekolah_id', 1);
            $sekolah_model = $CI->kwitang->ctModel('DataSekolah', 'DataSekolahM');
            $sekolah       = $sekolah_model->get($sekolah_id);

            $nama = isset($sekolah->nama) ? $sekolah->nama : '';

            echo form_open('#', 'class="form-horizontal"');
            ?>
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama Sekolah</label>
                <div class="col-sm-10">
                    <input id="nama" name="nama" value="<?php $nama; ?>" placeholder="Nama Sekolah" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="nss" class="col-sm-2 control-label">NSS</label>
                <div class="col-sm-10">
                    <input id="nss" name="nss" value="<?php $nss; ?>" placeholder="NSS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="npsn" class="col-sm-2 control-label">NPSN</label>
                <div class="col-sm-10">
                    <input id="npsn" name="npsn" value="<?php $npsn; ?>" placeholder="NPSN" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="kode_registrasi" class="col-sm-2 control-label">Kode Registrasi</label>
                <div class="col-sm-10">
                    <input id="kode_registrasi" name="kode_registrasi" value="<?php $kode_registrasi; ?>" placeholder="Kode Registrasi" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sk_pendirian_no" class="col-sm-2 control-label">SK Pendirian</label>
                <div class="col-sm-10">
                    <input id="sk_pendirian_no" name="sk_pendirian_no" value="<?php $sk_pendirian_no; ?>" placeholder="SK Pendirian" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sk_pendirian_tgl" class="col-sm-2 control-label">Tgl SK Pendirian</label>
                <div class="col-sm-10">
                    <input id="sk_pendirian_tgl" name="sk_pendirian_tgl" value="<?php $sk_pendirian_tgl; ?>" placeholder="Tgl SK Pendirian" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sk_izin_op_no" class="col-sm-2 control-label">SK Izin Operasional</label>
                <div class="col-sm-10">
                    <input id="sk_izin_op_no" name="sk_izin_op_no" value="<?php $sk_izin_op_no; ?>" placeholder="SK Izin Operasional" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="sk_izin_op_tgl" class="col-sm-2 control-label">Tgl SK Izin Operasional</label>
                <div class="col-sm-10">
                    <input id="sk_izin_op_tgl" name="sk_izin_op_tgl" value="<?php $sk_izin_op_tgl; ?>" placeholder="Tgl SK Izin Operasional" type="text" class="form-control">
                </div>
            </div>

            <Sih3>Alamat</Sih3>
            <div class="form-group">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                    <input id="alamat" name="alamat" value="<?php $alamat; ?>" placeholder="Alamat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="rt" class="col-sm-2 control-label">RT</label>
                <div class="col-sm-10">
                    <input id="rt" name="rt" value="<?php $rt; ?>" placeholder="RT" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="rw" class="col-sm-2 control-label">RW</label>
                <div class="col-sm-10">
                    <input id="rw" name="rw" value="<?php $rw; ?>" placeholder="RW" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="dusun" class="col-sm-2 control-label">Dusun</label>
                <div class="col-sm-10">
                    <input id="dusun" name="dusun" value="<?php $dusun; ?>" placeholder="Dusun" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="desa" class="col-sm-2 control-label">Desa</label>
                <div class="col-sm-10">
                    <input id="desa" name="desa" value="<?php $desa; ?>" placeholder="Desa" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="kodepos" class="col-sm-2 control-label">Kodepos</label>
                <div class="col-sm-10">
                    <input id="kodepos" name="kodepos" value="<?php $kodepos; ?>" placeholder="Kodepos" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="telepon" class="col-sm-2 control-label">Telepon</label>
                <div class="col-sm-10">
                    <input id="telepon" name="telepon" value="<?php $telepon; ?>" placeholder="Telepon" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="fax" class="col-sm-2 control-label">Fax</label>
                <div class="col-sm-10">
                    <input id="fax" name="fax" value="<?php $fax; ?>" placeholder="Fax" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input id="email" name="email" value="<?php $email; ?>" placeholder="Email" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="website" class="col-sm-2 control-label">Website</label>
                <div class="col-sm-10">
                    <input id="website" name="website" value="<?php $website; ?>" placeholder="Website" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="latitude" class="col-sm-2 control-label">Latitude</label>
                <div class="col-sm-10">
                    <input id="latitude" name="latitude" value="<?php $latitude; ?>" placeholder="Latitude" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="longitude" class="col-sm-2 control-label">Longitude</label>
                <div class="col-sm-10">
                    <input id="longitude" name="longitude" value="<?php $longitude; ?>" placeholder="Longitude" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="tanah_milik" class="col-sm-2 control-label">Tanah Milik</label>
                <div class="col-sm-10">
                    <input id="tanah_milik" name="tanah_milik" value="<?php $tanah_milik; ?>" placeholder="Tanah Milik" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="tanah_bukan_milik" class="col-sm-2 control-label">Tanah Bukan Milik</label>
                <div class="col-sm-10">
                    <input id="tanah_bukan_milik" name="tanah_bukan_milik" value="<?php $tanah_bukan_milik; ?>" placeholder="Tanah Bukan Milik" type="text" class="form-control">
                </div>
            </div>

            <Sih3>Rekening Bank</Sih3>
            <div class="form-group">
                <label for="bank_norek" class="col-sm-2 control-label">No. Rekening</label>
                <div class="col-sm-10">
                    <input id="bank_norek" name="bank_norek" value="<?php $bank_norek; ?>" placeholder="No. Rekening" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="bank_atasnama" class="col-sm-2 control-label">Atas Nama</label>
                <div class="col-sm-10">
                    <input id="bank_atasnama" name="bank_atasnama" value="<?php $bank_atasnama; ?>" placeholder="Atas Nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="bank_nama" class="col-sm-2 control-label">Nama Bank</label>
                <div class="col-sm-10">
                    <input id="bank_nama" name="bank_nama" value="<?php $bank_nama; ?>" placeholder="Nama Bank" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="bank_cabang" class="col-sm-2 control-label">Cabang</label>
                <div class="col-sm-10">
                    <input id="bank_cabang" name="bank_cabang" value="<?php $bank_cabang; ?>" placeholder="Cabang" type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
    </div>
</div>

<?php
include 'inc/footer.php';
