@extends('layouts.app')

@section('content')
<style>
    .container {
    max-width: 1100px;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-4">
            <img src="/images/Logomaker.jpg" class="rounded-circle" style="height: 200px;">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>
                    {{ $user->username }}
                </h1>
            </div>
            <div class="d-flex">
                <div style="padding-right: 35px"><strong>200</strong> posts</div>
                <div style="padding-right: 35px"><strong>52k</strong> followers</div>
                <div style="padding-right: 35px"><strong>500</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold" style="font-weight: bold;">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div style="font-weight: bold;">
                <a href="#">
                    {{ $user->profile->url }}
                </a>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4">
                <img src="https://cdn.hasselblad.com/f/77891/600x600/e30fe610f7/h-system-category.jpg" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://cdn.hasselblad.com/f/77891/600x600/6b07462359/x-system-category.jpg" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://cdn.hasselblad.com/f/77891/600x600/134e6ba48b/907x_hero_front_600.jpg" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
