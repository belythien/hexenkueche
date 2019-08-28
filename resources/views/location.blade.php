@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __('Anfahrt') }}</h1>
                </div>

                <div class="card-body">
                    <p>Du findest uns in der <br>
                    Goethestraße 2<br>
                    65510 Idstein-Wörsdorf
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.58894305102!2d8.253570615842166!3d50.24358381012987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdb7d31032fd17%3A0x3391e97b21da569b!2sHexenk%C3%BCche!5e0!3m2!1sde!2sde!4v1566656329419!5m2!1sde!2sde" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
