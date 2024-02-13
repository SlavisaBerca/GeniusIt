<?php

namespace App\Livewire\Install;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Artisan;
use App\Services\Install\LanguageService;

class WelcomeComponent extends Component
{
    public $siteTitle;
    public $langPath;
    public $content;
    public function render()
    {
        return view('livewire.install.welcome-component')->layout('livewire.layouts.install.app');
    }

    #[On('langChanged')]
    public function langChanged($path)
    {
        $this->langPath = $path;
        $this->content = LanguageService::getContent($this->langPath);
    }

    public function mount()
    {
        $this->langPath = LanguageService::getLang($this->langPath);
        $this->content = LanguageService::getContent($this->langPath);
    }
    public function startInstaller()
    {
        $envFile = file_get_contents(base_path('.env'));
        $envFile=preg_replace("/(APP_START=)(.*)/","APP_START=true",$envFile);
        file_put_contents(base_path('.env'),$envFile);
        Artisan::call('config:clear');
        return redirect()->route('app-install');
    }
}
