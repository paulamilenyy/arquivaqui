@extends('layouts.admin')

@section('content')

<div class="page-heading">
    <h1 class="page-title">Perfil</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Perfil</li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-3 col-md-4">
        <div class="ibox">
            <div class="ibox-body text-center">
                <div class="m-t-20">
                    <img class="img-circle" src="{{ asset( Auth::user()->profile_image ) }}"
                        onerror="this.src='{{asset('./assets/img/user.png')}}'" />
                </div>
                <h5 class="font-strong m-b-10 m-t-10">Nome:{{ Auth::user()->name }}</h5>
                <h5 class="font-strong m-b-10 m-t-10">Email:{{ Auth::user()->email }}</h5>
            </div>
        </div>
    </div>
</div>

</div>
<style>
.profile-social a {
    font-size: 16px;
    margin: 0 10px;
    color: #999;
}

.profile-social a:hover {
    color: #485b6f;
}

.profile-stat-count {
    font-size: 22px
}
</style>
@endsection