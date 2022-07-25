@extends('layouts.app')

@section('content')
<div class="container-fluid profile">
    {{-- @foreach ($user as $item ) --}}
    <div class="row justify-content-center">
        <div class="col-md-3 profile-left">
            <div class="infor">
                <div class="first-infor">
                    <img class="avatar" src="{{ asset($user->image) }}" alt="">
                    <div class="name">{{ $user->name }}</div>
                    <div class="email">{{ $user->email }}</div>
                </div>
                <div class="detail-infor">
                    <ul class="detail-infor-item">
                        <li class="item-card">
                            <p> <span class="font-birth"><i class="fa-solid fa-cake-candles"></i></span> {{
                                $user->birthdate_format }}</p>
                        </li>
                        <li class="item-card">
                            <p> <span class="font-phone"><i class="fa-solid fa-phone"></i></span> {{ $user->phone }}</p>
                        </li>
                        <li class="item-card">
                            <p> <span class="font-address"><i class="fa-solid fa-house-chimney"></i></span> {{
                                $user->address }}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="infor-description">
                    <p>{{ $user->about_me }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-7 profile-right">
            <div class="title">
                <p class="title-main">My courses</p>
                <p class="line"></p>
            </div>
            <div class="courses-list">
                <div class="courses-item">
                    <img class="photo" src="{{ asset('images/html.png') }}" alt="">
                    <div class="name">HTML</div>
                </div>
                <div class="courses-item">
                    <img class="photo" src="{{ asset('images/html.png') }}" alt="">
                    <div class="name">HTML</div>
                </div>
                <div class="courses-item">
                    <img class="photo" src="{{ asset('images/html.png') }}" alt="">
                    <div class="name">HTML</div>
                </div>
                <div class="courses-item">
                    <img class="photo" src="{{ asset('images/html.png') }}" alt="">
                    <div class="name">HTML</div>
                </div>
                <div class="courses-item">
                    <img class="photo" src="{{ asset('images/html.png') }}" alt="">
                    <div class="name">HTML</div>
                </div>
            </div>
            <div class="title">
                <p class="title-main">Edit profile</p>
                <p class="line"></p>
            </div>
            <div class="form-profile">
                <form method="POST" action="{{ route('profile.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row form-profile">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-md-4 col-form-label text-md-left p-0 title-label">Name:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror name-input" name="name"
                                        value="{{ $user->name }}" autocomplete="name" placeholder="Your name...">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="col-md-4 col-form-label text-md-left p-0 title-label">Date of
                                        birthday:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="birthdate" type="date"
                                        class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                                        value="{{ $user->birthdate }}" autocomplete="birthdate"
                                        placeholder="dd/mm/yyyy">

                                    @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-left p-0 title-label">Address:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ $user->address }}" autocomplete="address"
                                        placeholder="Your address...">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-submit btn-update">
                                        Update
                                    </button>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-left p-0 title-label">Email:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $user->email }}" autocomplete="email" placeholder="Your email...">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="phone"
                                        class="col-md-4 col-form-label text-md-left p-0 title-label">Phone:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ $user->phone }}" autocomplete="phone" placeholder="Your phone...">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="about_me"
                                        class="col-md-4 col-form-label text-md-left p-0 title-label">About
                                        me:</label>
                                </div>

                                <div class="col-md-12">
                                    <textarea id="about_me"
                                        class="form-control @error('about_me') is-invalid @enderror about-textarea"
                                        name="about_me" autocomplete="about_me"
                                        placeholder="About you...">{{ $user->about_me }}</textarea>

                                    @error('about_me')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
</div>
@endsection
