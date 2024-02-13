<?php

namespace App\Livewire\Install;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Services\Install\LanguageService;
use App\Livewire\Install\ConfigDatabaseComponent;

class InstallComponent extends Component
{
    public $langPath;

    public $content;

    public $dbChecked;
    public $width;
    public $tablesFound;
    public $getStep= 1;
    public $dbCheck;
    public $tables = [];
    public $dbDatabase;
    public $connStatus = false;


 
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

    public function checkConnection()
    {
        $this->dispatch('checkConn');
    }
    #[On('connChecked')]
    public function connectionChecked()
    {
        $this->connStatus = true;
        $this->dispatch('updateEnv');
    }
    #[On('connFailed')]
    public function connectionFailed()
    {
        $this->connStatus = false;
    }
 
    public function checkDatabase()
    {
        $this->dispatch('checkDb')->to(ConfigDatabaseComponent::class);
    }
    
    #[On('tablesFound')]
    public function tablesFound()
    {
        $this->tablesFound = true;
    }
    #[On('dbChecked')]
    public function dbChecked()
    {
        $this->dbChecked = true;
    }
   
    public function mount()
    {
        $this->width = 25;
        $this->langPath = LanguageService::getLang();
        $this->content = LanguageService::getContent($this->langPath);
    }
}
