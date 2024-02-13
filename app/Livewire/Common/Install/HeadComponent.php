<?php

namespace App\Livewire\Common\Install;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Services\Install\LanguageService;

class HeadComponent extends Component
{
    public $content;
    public $langPath;
    public $metaTags;
    public $metaDescription;

    public function render()
    {
        return view('livewire.common.install.head-component');
    }
    #[On('langChanged')]
    public function langChanged($lang)
    {
        $this->langPath = $lang;
        $this->content = LanguageService::getContent($this->langPath);
    }
    public function mount()
    {
        $this->langPath = LanguageService::getLang($this->langPath);
        $this->content = LanguageService::getContent($this->langPath);
    }
}
