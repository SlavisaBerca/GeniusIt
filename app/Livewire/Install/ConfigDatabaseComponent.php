<?php

namespace App\Livewire\Install;

use Livewire\Component;
use Livewire\Attributes\On;

class ConfigDatabaseComponent extends Component
{
    public $dbConnection;
    public $dbHost;
    public $dbPort;
    public $dbDatabase;
    public $dbUsername;
    public $dbPassword;
    
    #[On('checkConnection')]
    public function checkConnection()
    {

    }
    public function render()
    {
        return view('livewire.install.config-database-component');
    }

    public function updateEnv()
    {

    }

    public function connectDb()
    {

    }

    public function CheckTables()
    {
        
    }
}
