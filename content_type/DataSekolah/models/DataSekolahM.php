<?php defined('ROOT_PATH') or exit('No direct script access allowed');
/**
 * Data Sekolah Model
 *
 * Field yang belom ketahuan:
 * - ?? status_sekolah
 * - ?? mbs
 *
 * @package  AppSekolah\DataSekolah
 * @category Model
 * @author   Iyan Kushardiansah <iyank4@gmail.com>
 */
class DataSekolahM extends ContentTypeModel
{
    public $table_name = 'sis_sekolah';
    public $fields = array(
                        // Referensi
                        'bentuk_pendidikan_id' => array(
                                    'type' => 'INTEGER',
                                    'default' => 0
                                ),
                        'area_id' => array(
                                    'type' => 'INTEGER',
                                    'default' => 0
                                ),
                        'kepemilikan_id' => array(
                                    'type' => 'INTEGER',
                                    'default' => 0
                                ),
                        'yayasan_id' => array(
                                    'type' => 'INTEGER',
                                    'default' => 0
                                ),
                        // Data Dasar
                        'nama' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 80
                                ),
                        'nss' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 12
                                ),
                        'npsn' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 8
                                ),
                        'kode_registrasi' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 80
                                ),
                        'sk_pendirian_no' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 40
                                ),
                        'sk_pendirian_tgl' => array(
                                    'type' => 'DATE'
                                ),
                        'sk_izin_op_no' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 40
                                ),
                        'sk_izin_op_tgl' => array(
                                    'type' => 'DATE'
                                ),
                        'sk_akreditasi_no' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 40
                                ),
                        'sk_akreditasi_tgl' => array(
                                    'type' => 'DATE'
                                ),
                        // Alamat
                        'alamat' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 80
                                ),
                        'rt' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 3
                                ),
                        'rw' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 3
                                ),
                        'dusun' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 30
                                ),
                        'desa' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 30
                                ),
                        'kodepos' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 5
                                ),
                        'telepon' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 20
                                ),
                        'fax' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 20
                                ),
                        'email' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 50
                                ),
                        'website' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 100
                                ),
                        'latitude' => array(
                                    'type' => 'FLOAT',
                                    'default' => 0
                                ),
                        'longitude' => array(
                                    'type' => 'FLOAT',
                                    'default' => 0
                                ),
                        // Tanah
                        'tanah_milik' => array(
                                    'type' => 'FLOAT',
                                    'default' => 0
                                ),
                        'tanah_bukan_milik' => array(
                                    'type' => 'FLOAT',
                                    'default' => 0
                                ),
                        // Bank
                        'bank_norek' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 20
                                ),
                        'bank_atasnama' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 50
                                ),
                        'bank_nama' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 20
                                ),
                        'bank_cabang' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 30
                                )
                     );

    //public $keys = array('slug', 'pub_date', 'tags', 'guid');
}
