<?php 

namespace App\Services\Install;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class LanguageService
{
    public static function getLang()
    {
        return Cache::get('language')['path'] ?? 'en';
    }
    public static function setLang($lang)
    {
        Cache::put('language',['path'=>$lang]);
    }

    public static function getContent($lang)
    {
        $content_file = resource_path("langs/install/{$lang}/{$lang}.json");

        if(File::exists($content_file))
        {
            $content = File::get($content_file);
            return json_decode($content,true);
        }

        return [];
    }
}