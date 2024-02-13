<div>
@push('css')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

@endpush
    <style>
        
p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0
}

#msform .action-button {
    width: 200px;
    background: #673AB7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92
}

#msform .action-button-previous {
    width: 200px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #673AB7
}

.fit-image {
    width: 100%;
    object-fit: cover
}
    </style>
       
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header  justify-content-center">
                    <h3 class="text-center">{{$content['head']['site_title']}}</h3>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 text-center p-0 mt-3 mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2 id="heading">Sign Up Your User Account</h2>
                                    <p>Fill all form field to go to next step</p>
                                    <form id="msform">
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active" id="account"><strong>Account</strong></li>
                                            <li id="personal"><strong>Personal</strong></li>
                                            <li id="payment"><strong>Image</strong></li>
                                            <li id="confirm"><strong>Finish</strong></li>
                                           
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:{{$width}}%;" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <br> <!-- fieldsets -->
                                        <div class="spinner-border" role="status" wire:loading>
                                            <span class="sr-only">Loading...</span>
                                          </div>
                                            @if($getStep==1)
                                            <fieldset>
                                            @if(!$connStatus)
                                            <livewire:install.config-database-component/>
                                            @endif 
                                            @if($connStatus)
                                            <ul class="list-group">
                                                <li class="list-group-item"><i class="fa fa-check"></i> Cras justo odio</li>
                                                <li class="list-group-item"><i class="fa fa-check"></i> Dapibus ac facilisis in</li>
                                                <li class="list-group-item"><i class="fa fa-check"></i> Morbi leo risus</li>
                                                <li class="list-group-item"><i class="fa fa-check"></i> Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                              </ul>
                                            @endif 
                                            @if($tablesFound)
                                            <ul class="list-group">
                                                <li class="list-group-item text-danger"><i class="fa fa-times text-danger"></i>{{count($tables)}} Tables Found <p wire:click="clearDb" style="cursor:pointer;margin-top:15px;">Click Here To Delete</p></li>
                                              
                                              </ul>
                                            @endif
                                        @if(!$connStatus && $getStep==1)
                                            <input type="button" name="next" wire:click="checkConnection" class="next action-button" value="Check Connection" />
                                        @endif
                                        @if(!$dbCheck && $connStatus)
                                            <input type="button" name="next" class="next action-button" wire:click="checkDatabase" value="Check Database" />
                                        @endif 
                                        @if($connStatus && $dbCheck) 
                                        <input type="button" name="next" class="next action-button" wire:click="nextStep" value="Next" />
                                        @endif
                                        
                                        </fieldset>
                                            @endif 
                                          

                                        @if($getStep==2)
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Personal Information:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 2 - 4</h2>
                                                    </div>
                                                </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" />
                                                 <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" />
                                                 <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> 
                                                 <label class="fieldlabels">Alternate Contact No.: *</label> 
                                                 <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                            </div>
                                             <input type="button" name="next" class="next action-button" wire:click="emitMethod('3')" value="Next" />
                                              <input type="button" name="previous" class="previous action-button-previous" wire:click="emitMethod('1')" value="Previous" />
                                        </fieldset>
                                        @endif
                                        @if($getStep==3)
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Image Upload:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 3 - 4</h2>
                                                    </div>
                                                </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> 
                                                <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                                            </div> <input type="button" name="next" class="next action-button" wire:click="emitMethod('4')" value="Submit" />
                                             <input type="button" name="previous" class="previous action-button-previous" wire:click="emitMethod('2')" value="Previous" />
                                        </fieldset>
                                        @endif
                                        @if($getStep==4)
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Finish:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 4 - 4</h2>
                                                    </div>
                                                </div> <br><br>
                                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                                <div class="row justify-content-center">
                                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                                </div> <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</div>
