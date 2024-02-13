<div>
    <li class="nav-item ps-3">
        <div class="dropdown header-profile2">
            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="header-info2 d-flex align-items-center">
                    <div class="header-media">
                        <img src="{{URL::to('installer/countries/'.$langPath.'.png')}}" alt="">
                    </div>
                    <div class="header-info">
                        <h6>{{$langs[$langPath]}}</h6>
                      
                    </div>
                    
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end" style="">
                <div class="card border-0 mb-0">
                
                    <div class="card-body px-0 py-2">
                    @foreach($langs as $key=>$lang)
                    @if($langPath !== $key)
                        <a style="cursor:pointer;" wire:click="changeLang('{{$key}}')" class="dropdown-item ai-icon ">
                            <img src="{{URL::to('installer/countries/'.$key.'.png')}}" alt="" style="min-height:18px;max-height:18px;min-width:22px;max-width:22px;">

                            <span class="ms-2">{{$lang}} </span>
                        </a>
                    @endif 
                    @endforeach
                        
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </li>
</div>
