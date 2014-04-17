<?php defined('ROOT_PATH') or exit('No direct script access allowed');
/**
 * Data Sekolah Model
 *
 * Field yang belom ketahuan:
 * - ?? status_sekolah
 * - ?? mbs
 *
 * @package  AppSekolah\DataAbsen
 * @category Model
 * @author   Iyan Kushardiansah <iyank4@gmail.com>
 */
class DataAlatM extends ContentTypeModel
{
    public $table_name = 'sis_absen_device';
    public $fields = array(
                        // Referensi
                        'title' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 80
                                ),
                        'ip_address' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 20
                                )
                     );

    //public $keys = array('');
}
