<?php

if (!function_exists('set_active_navbar')) {
    function set_active_navbar($uri, $output = 'mm-active')
    {
        if (is_array($uri)) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)) {
                return $output;
            }
        }
    }
}

if (!function_exists('tgl_id')) {
    function tgl_id($tgl)
    {
        $dt = new Carbon($tgl);
        setlocale(LC_TIME, 'IND');
        setlocale(LC_TIME, 'id_ID');
        return $dt->formatLocalized('%d %B %Y');
    }

    function convert_tanggal($tgl){
        return date('d M Y H:i', strtotime($tgl));
    }
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return Str::lower($randomString);
}
