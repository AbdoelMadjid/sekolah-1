<?php
if (! defined('ROOT_PATH')) {
    exit('No direct script access allowed');
}
/**
 * Kontroller pada tipe-konten Sekolah
 *
 * @package  AppSekolah\DataSekolah
 * @category Controller
 * @author   Iyan Kushardiansah <iyank4@gmail.com>
 */
class DataSekolah extends ContentTypeController
{
    public function title()
    {
        return 'DataSekolah';
    }

    public function description()
    {
        return "Data Sekolah";
    }

    public function version()
    {
        return '0.0.1';
    }

    public function mainModel()
    {
        return 'DataSekolahM';
    }

    /**
     * This method will executed when loaded by KwitangCMS
     *
     * KwitangCMS call prepare('method_name') before calling the method in
     * this class
     *
     * @param  string $action Method name
     * @return void
     */
    public function prepare($action)
    {
        switch ($action) {
            case 'display':
                $this->session->set_userdata('referrer', current_url());
                $this->vars['css_files'][] = asset_url('dtables/css/jquery.dataTables.css');
                $this->vars['js_files'][]  = asset_url('dtables/js/jquery.dataTables.min.js');
                break;
            case 'save':
            case 'update':
            case 'delete':
            case 'delg':
            case 'dataJson':
                $this->vars['admin_header'] = false;
                $this->vars['admin_footer'] = false;
                break;
            case 'add':
            case 'edit':
                $this->vars['return_url'] = $this->session->userdata('referrer');
                $this->vars['js_files'][] = asset_url('ckeditor/ckeditor.js');
                break;
        }
    }

    /**
     * Default method to display data on KwitangCMS admin
     *
     * @param  integer $page_number Page number
     * @return void
     */
    public function display($page_number = 1)
    {
        $this->__view('list');
    }

    /**
     * Page to Add data, contain form for write the data.
     *
     * @return void
     */
    public function add()
    {
        if (! priv('posting')) {
            redirect('admin');
        }

        $this->load->helper('form');
        $this->__view('addedit');
    }

    /**
     * Page for saving data sent by form at add() method
     *
     * @return void
     */
    public function save()
    {
        if (! priv('posting')) {
            $url = $this->session->userdata('referrer');
            redirect($url);
        }

        $data = array();
        $data['title']      = substr($this->input->post('title'), 0, 120);
        $data['body']       = $this->input->post('body', false);
        $data['active']     = ($this->input->post('active') == 'on' ? 1 : 0);

        $data['sct_id']     = $this->vars['current_sct']->id;

        $text = $this->kwitang->ctModel('Sekolah', 'SekolahModel');
        $ret = $text->insert($data);
        if (! $ret) {
            show_error('Gagal menambah data, silakan coba beberapa saat lagi');
        } else {
            $last_id = $ret;

            $close = $this->input->post('closethis');
            $current_sct = $this->vars['current_sct'];

            if (isset($last_id) && empty($close)) {
                redirect(site_url('/admin/content/' . $current_sct->structure_id . '/' . $current_sct->id . '/edit/' . $last_id), 'refresh');
            } else {
                redirect(site_url('/admin/content/' . $current_sct->structure_id . '/' . $current_sct->id), 'refresh');
            }
        }
    }

    /**
     * Page to Edit data, contain form for edit the data.
     *
     * @return void
     */
    public function edit($id)
    {
        if (empty($id)) {
            show_404();
        }

        $this->load->helper('form');
        $text = $this->__model('SekolahModel');
        $content = $text->get($this->vars['current_sct']->id, $id, false);

        $this->__view('addedit', array('content'=>$content));
    }

    /**
     * Page for update the data sent by form at edit() method
     *
     * @return void
     */
    public function update()
    {
        if (! priv('approve')) {
            $url = $this->session->userdata('referrer');
            redirect($url);
        }

        $text = $this->__model('SekolahModel');
        $lama = $text->get($this->input->post('id'), false);

        $data = array();
        $id                 = $this->input->post('id');
        $data['title']      = substr($this->input->post('title'), 0, 120);
        $data['body']       = $this->input->post('body', false);
        $data['active']     = ($this->input->post('active') == 'on' ? 1 : 0);

        $data['sct_id']     = $this->vars['current_sct']->id;

        $ret = $text->update($data, $id);
        if (! $ret) {
            show_error('Gagal mengupdate data, silakan coba beberapa saat lagi');
        } else {
            $close = $this->input->post('closethis');
            $current_sct = $this->vars['current_sct'];

            if (empty($close)) {
                $url = site_url('/admin/content/' . $current_sct->structure_id . '/' . $current_sct->id . '/edit/' . $this->input->post('id'));
            } else {
                $url = $this->session->userdata('referrer');
                if (empty($url)) {
                    $url = site_url('/admin/content/' . $current_sct->structure_id);
                }
            }

            redirect($url, 'refresh');
        }
    }

    /**
     * Page for delete data.
     *
     * @return void
     */
    public function delete($id)
    {
        $current_sct = $this->vars['current_sct'];
        $url  = null;
        $text = $this->__model('SekolahModel');

        if (priv('manage')) {
            $lama    = $text->get($current_sct->id, $id);
            $ret     = $text->delete($id);

            $url = $this->session->userdata('referrer');
        }

        if (empty($url)) {
            $url = site_url('/admin/content/'.$current_sct->structure_id.'/'.$current_sct->id);
        }

        redirect($url, 'refresh');
    }

    /**
     * Output JSON data used for datatables
     *
     * @return void
     */
    public function dataJson()
    {
        $kolom        = array('title', 'active');
        $disp_start   = intval($this->input->get('iDisplayStart', true));
        $item_perpage = intval($this->input->get('iDisplayLength', true));
        $orders       = array();
        $searchs      = array();
        $current_sct  = $this->vars['current_sct'];

        // searching
        $tmp = $this->input->get('sSearch', true);
        if (! empty ($tmp)) {
            $searchs = array('title' => $tmp);
        }

        // ordering
        $sort_total = intval($this->input->get('iSortingCols', true));
        if ($sort_total > 0) {
            for ($i = 0; $i < count($kolom); $i++) {
                $sort_x     = $this->input->get('iSortCol_' . $i, true);
                $sort_yn    = $this->input->get('bSortable_' . $sort_x, true);
                $sort_dir   = $this->input->get('sSortDir_' . $i, true);

                if ($sort_yn == "true") {
                    $orders[$kolom[$sort_x]] = $sort_dir;
                }
            }
        }

        $text = $this->__model('SekolahModel');
        $content = $text->all($current_sct->id, $item_perpage, $disp_start, $orders, $searchs, false);

        $json = array(
                    "sEcho"                => intval($this->input->get('sEcho', true)),
                    "iTotalRecords"        => $content['total_all'],
                    "iTotalDisplayRecords" => $content['total_found'],
                    "aaData" => array()
                );

        $controller_uri = 'admin/content/' . $this->vars['current_sct']->structure_id . '/' . $this->vars['current_sct']->id . '/';
        foreach ($content['data'] as $c) {
            $edit_url = site_url($controller_uri . 'edit/' . $c->id);
            $del_url  = site_url($controller_uri . 'delete/' . $c->id);
            $d = array(
                    '<a href="' . $edit_url . '">' . $c->title .'</a>',
                    ($c->active ? '<i class="icon-green icon-ok"></i>' : '<i class="icon-red icon-remove"></i>'));
            if (priv('manage')) {
                $d[] = '<a href="' . $del_url . '" title="Hapus ' . $c->title . '" onclick="if( ! confirm(\'Hapus ' . $c->title . '\')) return false;"><i class="icon-trash"></i></a>';
            }
            $json['aaData'][] = $d;
        }

        header('Content-type: application/json');
        echo json_encode($json);
    }
}
