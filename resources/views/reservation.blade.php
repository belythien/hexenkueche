@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __('Reservierung') }}</h1>
                </div>

                <div class="card-body">
                    Gerne reservieren wir einen Tisch für Sie!<br>
                    Rufen Sie dazu einfach an unter 06126 5049523 oder schreiben Sie eine Whatsapp an 0160 7744836.<br>
                    Reservierungen per Mail bekommen wir möglicherweise zu spät mit, weil wir viel zu sehr mit kochen beschäftigt sind :)

                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <img class="img-thumbnail mb-3" src="/storage/images/IMG_20190824_211040-01_1567012561.jpeg">
                        </div>
                        <div class="col-lg-4">
                            <img class="img-thumbnail mb-3" src="/storage/images/IMG_20190824_211212-01_1567012791.jpeg">
                        </div>
                        <div class="col-lg-4">
                            <img class="img-thumbnail mb-3" src="/storage/images/IMG_20190824_215835-01_1567012807.jpeg">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
