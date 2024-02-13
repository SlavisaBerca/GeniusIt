<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header  justify-content-center">
                    <h3 class="text-center">{{$content['head']['site_title']}}</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group ">
              
                        @foreach($content['body']['sections'] as $section)
                                <li class="list-group-item"><h3 class="text-center">{{ $section['section_title'] }}</h3></li>
                                <li class="list-group-item"><p>{{ $section['description'] }}</p></li>

                         @endforeach
                    </ul>
                    <div class="row">
                        <div class="col-md-4 mt-3 mb-3">
                            <button wire:click="startInstaller" class="btn btn-success">{{$content['buttons']['install_app']}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
