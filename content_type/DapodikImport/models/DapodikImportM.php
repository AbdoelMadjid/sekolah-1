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
class DapodikImportM extends ContentTypeModel
{
    public $table_name = 'sis_dapodik_import';
    public $fields = array(
                        // Referensi
                        'table_source' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 30
                                ),
                        'id_source' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 40
                                ),
                        'table_destination' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => 30
                                ),
                        'id_destination' => array(
                                    'type' => 'BIGINT',
                                    'unsigned' => TRUE,
                                    'default' => 0
                                ),
                        'date_import' => array(
                                    'type' => 'DATETIME'
                                )
                     );

    //public $keys = array('slug', 'pub_date', 'tags', 'guid');
}
