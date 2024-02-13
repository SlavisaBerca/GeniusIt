<div>

        <div class="form-card" >
             <label class="fieldlabels">Connection: *</label>
             <input type="text" wire:model="dbConnection"  /> 
             <label class="fieldlabels">Host: *</label> 
             <input type="text" wire:model="dbHost"  />
             <label class="fieldlabels">Port: *</label>
             <input type="number" min="1000"  wire:model="dbPort" />
             <label class="fieldlabels">Database: *</label>
             <input type="text" wire:model="dbDatabase" placeholder="Database Name" />
             <label class="fieldlabels">Username: *</label>
             <input type="text" wire:model="dbUsername" placeholder="Database Username" />
             <label class="fieldlabels">Password: *</label>
             <input type="password" wire:model="dbPassword" placeholder="Database Password" />
           
        </div> 
        
</div>
