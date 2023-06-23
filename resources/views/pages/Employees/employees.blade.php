@extends('main')
@section('title','New Employee')
@section('content')
<div class="odecci-full-container">
    <div class="oddeci-module-head">
        <div class="odecci-module-title">
            <div class="odecci-head-filter">
            <h1 class="odecci-title">Employees</h1>
            <form action="">
                <input type="text">
            </form>
        </div>
            <p class="odecci-head-note">Last update was Monday, June 13, 2023 10:00 AM By Admin</p>
        </div>
        <div class="odecci-profile">
            <img src="{{ asset("assets/icons/profile.png") }}" alt="profile" width="100%" height="100%">
        </div>
    </div>
</div>
@endsection