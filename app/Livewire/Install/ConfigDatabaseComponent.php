<?php

namespace App\Livewire\Install;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class ConfigDatabaseComponent extends Component
{
    public $dbConnection='mysql';
    public $dbHost='localhost';
    public $dbPort=3306;
    public $dbDatabase='laravel';   
    public $dbUsername='root';
    public $dbPassword;
    
    #[On('checkConn')]
    public function checkConnection()
    {
        $conn = mysqli_connect($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbDatabase, $this->dbPort);
        if($conn){
            $this->dispatch('connChecked');
        }else{
            $this->dispatch('connFailed');
        }
    }
    #[On('updateEnv')]
    public function updateEnv()
    {
        $envFile = file_get_contents(base_path('.env'));
        $envFile = str_replace('DB_CONNECTION=mysql', 'DB_CONNECTION='.$this->dbConnection, $envFile);
        $envFile= str_replace('DB_HOST=localhost', 'DB_HOST='.$this->dbHost, $envFile);
        $envFile= str_replace('DB_PORT=3306', 'DB_PORT='.$this->dbPort, $envFile);
        $envFile= str_replace('DB_DATABASE=laravel', 'DB_DATABASE='.$this->dbDatabase, $envFile);
        $envFile= str_replace('DB_USERNAME=root', 'DB_USERNAME='.$this->dbUsername, $envFile);
        $envFile= str_replace('DB_PASSWORD=', 'DB_PASSWORD='.$this->dbPassword, $envFile);

        file_put_contents(base_path('.env'), $envFile);
        $this->dispatch('envUpdated');
        
    }
    
    #[On('checkDb')]
    public function checkDb()
    {
        $tables = DB::select('SHOW TABLES');
        dd($tables);
        if(count($tables) > 0){
            $this->dispatch('tablesFound');
        }else{
            $this->dispatch('dbChecked');
        }
    }
    
    public function render()
    {
        return view('livewire.install.config-database-component');
    }
    
}
