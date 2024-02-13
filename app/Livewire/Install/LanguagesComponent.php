<?php

namespace App\Livewire\Install;

use Livewire\Component;
use App\Services\Install\LanguageService;

class LanguagesComponent extends Component
{
    public $langPath;

    public $langs = [

        'en'=>'English',
        'es'=>'Espanol',
        'ro'=>'Romana',
        'ru'=>'Ruski',
        'srb'=>'Srpski',
    ];
    public function render()
    {
        return view('livewire.install.languages-component');
    }

    public function changeLang($path)
    {
        $this->langPath = $path;
        LanguageService::setLang($path);

        $this->dispatch('langChanged',$this->langPath);
    }

    public function mount()
    {
        $this->langPath = LanguageService::getLang();
    }
}
