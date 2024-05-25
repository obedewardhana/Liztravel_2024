<?php


function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka);
    return $hasil_rupiah;
}

function reformat_date($date)
{
    if ($date == '') {
        return $date;
    } else {
        $newdate = strtotime($date);
        return date("d-m-Y", $newdate);
    }
}

function get_tanggal($tanggal, $cetak_hari = false)
{
    $hari = array(
        1 => 'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );

    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    $tgl_indo = $split[0];

    if ($cetak_hari) {
        $num = date('N', strtotime($tanggal));
        return $hari[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

function get_hari($tanggal)
{
    if ($tanggal = 1) {
        $hari = 'Senin';
    } else if ($tanggal = 2) {
        $hari = 'Selasa';
    } else if ($tanggal = 3) {
        $hari = 'Rabu';
    } else if ($tanggal = 4) {
        $hari = 'Kamis';
    } else if ($tanggal = 5) {
        $hari = 'Jumat';
    } else if ($tanggal = 6) {
        $hari = 'Sabtu';
    }

    return $hari;
}


function tanggal_indo($tanggal, $cetak_hari = false)
{
    $hari = array(
        1 => 'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );

    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    $tgl_indo = $split[2] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[0];

    if ($cetak_hari) {
        $num = date('N', strtotime($tanggal));
        return $hari[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

function reformat_year($date)
{
    if ($date == '') {
        return $date;
    } else {
        $newdate = strtotime($date);
        return date("Y", $newdate);
    }
}

function getyear()
{
    return date("Y");
}

function default_pic($photo)
{
    if ($photo == '') {
        return 'default.png';
    } else {
        return $photo;
    }
}

function default_doc($doc)
{
    if ($doc == '') {
        return 'No Data';
    } else {
        $html = '<a class="links" href="' . base_url() . "" . $doc . '" target="_blank"></a>';
        return $html;
    }
}

function math($ma)
{
    if (preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $ma, $matches) !== FALSE) {
        $operator = $matches[2];

        switch ($operator) {
            case '+':
                $p = $matches[1] + $matches[3];
                break;
            case '-':
                $p = $matches[1] - $matches[3];
                break;
            case '*':
                $p = $matches[1] * $matches[3];
                break;
            case '/':
                $p = $matches[1] / $matches[3];
                break;
        }

        return rupiah($p);
    }
}

function trim_words($string, $max_length)
{
    return(strlen($string) > $max_length) ? substr($string, 0, strrpos(substr($string, 0, $max_length), ' ')) . "…" : $string;
}

function template()
{
    $ci = &get_instance();
    $query = $ci->db->query("SELECT judul FROM templates where aktif='Y'");
    $tmp = $query->row_array();
    if ($query->num_rows() >= 1) {
        return $tmp['judul'];
    } else {
        return 'errors';
    }
}

function convertToText($filename)
{

    $fileArray = pathinfo($filename);
    $file_ext = $fileArray['extension'];
    if ($file_ext == "doc") {
        $fileHandle = fopen($filename, "r");
        $line = @fread($fileHandle, filesize($filename));
        $lines = explode(chr(0x0D), $line);
        $outtext = "";
        foreach ($lines as $thisline) {
            $pos = strpos($thisline, chr(0x00));
            if (($pos !== FALSE) || (strlen($thisline) == 0)) {
            } else {
                $outtext .= $thisline . " ";
            }
        }
        $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/", "", $outtext);
        return $outtext;
    } else {
        return "Invalid File Type";
    }
}

function penulis_name($id)
{
    $CI =& get_instance();
    $query = $CI->db->where('id', $id)->get('penulis')->row();
    return $query->nama;
}

function product_name($id)
{
    $CI =& get_instance();
    $query = $CI->db->where('id', $id)->get('products')->row();
    if ($query != null) {
        if ($query->category != 'Penginapan') {
            return $query->category . '<br>' . $query->name . '-' . $query->transmission;
        } else {
            return $query->category . '<br>' . $query->name;
        }
    } else {
        return 'Tidak ada data.';
    }
}


function convert_html($id)
{
    $CI =& get_instance();
    $query = $CI->db->where('id', $id)->get('jurnal')->row();
    $new = htmlentities($query->abstrak);
    return $new;
}

function author_name($id)
{
    $CI =& get_instance();
    $query = $CI->db->where('id', $id)->get('users')->row();
    return $query->name;
}

function role_name($id)
{
    $CI =& get_instance();
    $query = $CI->db->where('id', $id)->get('role')->row();
    return $query->title;
}

function get_role($role)
{
    $CI =& get_instance();
    $query = $CI->db->where('id', $role)->get('role')->row();
    return $query->title;
}

function only_master($role)
{
    $CI =& get_instance();
    $CI->load->library('session');
    $session = $CI->session->userdata('role');
    if ($session == 1) {
        if ($role == 1) {
            return '';
        }
    } else {
        if ($role == 1) {
            return '';
        } else {
            return '<button type="button" class="btn btn-danger btn-sm btn-delete" data-id="' . $role . '" data-title="<get-title>" ><i class="fa fa-trash"></i></button>';
        }
    }
}

function only_masteruser($id)
{
    $CI =& get_instance();
    $CI->load->library('session');
    $session = $CI->session->userdata('role');
    $role = $CI->db->query("SELECT * FROM users WHERE id='" . $id . "'")->row();
    if ($session == 1) {
        if ($role->role == 1) {
            return '';
        } else {
            return '<button type="button" class="btn btn-danger btn-sm btn-delete" data-id="' . $id . '" data-title="' . $role->name . '" ><i class="fa fa-trash"></i></button>';
        }
    } else {
        if ($role->role == 1) {
            return '';
        } else {
            return '<button type="button" class="btn btn-danger btn-sm btn-delete" data-id="' . $id . '" data-title="' . $role->name . '" ><i class="fa fa-trash"></i></button>';
        }
    }
}

function status_style($status)
{
    $style = '';
    if ($status == 'Paid') {
        $style = "<div class='mt-2 btn btn-table-status btn-success'><span>" . $status . "</span></div>";
    } else if ($status == 'Waiting list') {
        $style = "<div class='mt-2 btn btn-table-status btn-warning'><span>" . $status . "</span></div>";
    } else {
        $style = "<div class='mt-2 btn btn-table-status btn-danger'><span>" . $status . "</span></div>";
    }
    return $style;
}

function all_penulis($id)
{
    $CI =& get_instance();
    $query = $CI->db->query("SELECT jurnalpenulis.penulis AS penuliss, penulis.nama AS namapenulis FROM jurnalpenulis JOIN penulis ON penulis.id = jurnalpenulis.penulis where jurnalpenulis.jurnal='" . $id . "'");
    $tmp = $query->result();
    $all = array();


    foreach ($tmp as $q) {
        array_push($all, $q->namapenulis);
    }

    // return $tmp->namapenulis;

    foreach ($all as $a) {
        return $a;
    }

}

function penulis_jurnal($id)
{
    $CI =& get_instance();
    $query = $CI->db->query("SELECT jurnalpenulis.penulis AS penuliss FROM jurnalpenulis JOIN penulis ON penulis.id = jurnalpenulis.penulis where jurnalpenulis.jurnal='" . $id . "'");
    $tmp = $query->result();
    $penss = $CI->db->query("SELECT * FROM penulis");
    $options = '';
    $jupe = array();

    foreach ($query->result() as $q) {
        array_push($jupe, $q->penuliss);
    }

    foreach ($penss->result() as $m) {
        $selected = (in_array($m->id, $jupe)) ? 'selected' : '';
        $options .= "<option value='" . $m->id . "' " . $selected . ">" . $m->nama . "</option>";
    }

    return '<select name="penulis-' . $id . '" autocomplete="new-penulis" class="form-control js-select2-multiple"
            multiple="multiple" id="penulis-' . $id . '">' . $options . '</select>';

}

function privileges($id)
{
    $CI =& get_instance();
    $query = $CI->db->query("SELECT hak_akses.moduls AS modulhak,moduls.title AS modulname,moduls.id AS modulid FROM hak_akses JOIN moduls ON hak_akses.moduls = moduls.id where hak_akses.role='" . $id . "'");
    $tmp = $query->result();
    $moduls = $CI->db->query("SELECT * FROM moduls");
    $options = '';
    $hak = array();

    foreach ($query->result() as $q) {
        array_push($hak, $q->modulhak);
    }

    if ($id == 1) {
        return '<b>Full Access</b>';
    } else {
        foreach ($moduls->result() as $m) {
            $selected = (in_array($m->id, $hak)) ? 'selected' : '';
            $options .= "<option value='" . $m->id . "' " . $selected . ">" . $m->title . "</option>";
        }

        return '<select name="moduls-' . $id . '" autocomplete="new-moduls" class="form-control js-select2-multiple"
            multiple="multiple" id="moduls-' . $id . '">' . $options . '</select>';
    }

}