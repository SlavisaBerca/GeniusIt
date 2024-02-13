<?php

namespace App\Livewire\Install;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Services\Install\LanguageService;

class InstallComponent extends Component
{
    public $langPath;

    public $content;

    public $dbChecked;
    public $getStep =1;

    public $formHeaders = [
        '1'=>'Config Database',
        '2'=>'Register Admin',
        '3'=>'Set Details',
        '4'=>'Complete Settings',
    ];

    public function render()
    {
        return view('livewire.install.install-component')->layout('livewire.layouts.install.app');
    }
    #[On('updateEnv')]
    public function updateEnv()
    {
        Artisan::call('config:clear');
       
        $this->dbChecked = true;


    }

    #[On('langChanged')]
    public function langChanged($path)
    {
        $this->langPath = $path;
        $this->content = LanguageService::getContent($this->langPath);
    }
    public function emitMethod($param)
    {
        if($param==1)
        {
            $this->dispatch('checkDataBase');
        }
    }

    #[On('paramChanged')]
    public function paramChanged($param)
    {
        $this->getStep = $param;
    }

    public function mount()
    {
        $this->langPath = LanguageService::getLang();
        $this->content = LanguageService::getContent($this->langPath);
    }
}
