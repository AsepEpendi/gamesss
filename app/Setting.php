<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $table = 'setting_tables';

    //
    public static function settings()
    {
        # code...
        $data = DB::table('setting_tables');
        $data = $data->get();

        $settings = [
            "title_text" => "Gamesss",
            "footer_text" => "GAMESSS",
            "site_currency_symbol" => "Rp ",
            "company_name" => "Gamesss",
            "company_address" => "Jl. Malaka Baru RT 06 RW 011 Pondok Kopi Jakarta Timur, Duren Sawit, Jakarta Timur 13460",
            "company_phone" => "",
            "company_email" => "",
            "postal_code" => "",
            "company_fb" => "",
            "company_ig" => "",
            "company_twitter" => "",
            "company_yt" => "ASEP IT",
            "phone_wa" => "",
            "text_wa" => "",
        ];

        foreach ($data as $row){
            $settings[$row->name] = $row->value;
        }

        return $settings;
    }

    public static function getValByName($key)
    {
        $setting = Setting::settings();
        if (!isset($setting[$key]) || empty($setting[$key])) {
            $setting[$key] = '';
        }
        return $setting[$key];
    }

    public static function setEnvironmentValue(array $values)
    {
        $envFile = app()->environmentFilePath();
        $str     = file_get_contents($envFile);
        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {
                $keyPosition       = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine           = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}='{$envValue}'\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}='{$envValue}'", $str);
                }
            }
        }
        $str = substr($str, 0, -1);
        $str .= "\n";
        if (!file_put_contents($envFile, $str)) {
            return false;
        }

        return true;
    }
}
