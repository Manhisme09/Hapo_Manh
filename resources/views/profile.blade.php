@extends('layouts.app')

@section('content')
<div class="container-fluid profile">
    <div class="row justify-content-center">
        <div class="col-md-4 profile-left">
            <div class="infor">
                <div class="first-infor">
                    <img class="avatar" src="{{ asset('images/banner.png') }}" alt="">
                    <div class="name">Nguyen Duc Manh</div>
                    <div class="email">manht9090@gmail.com</div>
                </div>
                <div class="detail-infor">
                    <ul class="detail-infor-item">
                        <li class="item-card">
                            <p> <span class="font-birth"><i class="fa-solid fa-cake-candles"></i></span> 10/10/2998</p>
                        </li>
                        <li class="item-card">
                            <p> <span class="font-phone"><i class="fa-solid fa-phone"></i></span> 10/10/2998</p>
                        </li>
                        <li class="item-card">
                            <p> <span class="font-address"><i class="fa-solid fa-house-chimney"></i></span> 10/10/2998
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="infor-description">
                    <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
                        dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna
                        feugiat
                        rutrum. Nam nulla ippsumipsum, them sss</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 profile-right">
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
                <form method="POST" action="">
                    @csrf

                    <div class="row form-profile">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-md-4 col-form-label text-md-left p-0 name-label">Name:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control name-input" name="name"
                                        value="{{ old('name') }}" autocomplete="name" placeholder="Your name...">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="col-md-4 col-form-label text-md-left p-0 birthdate-label">Date of
                                        birthday:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="birthdate" type="date" class="form-control" name="birthdate"
                                        value="{{ old('birthdate') }}" autocomplete="birthdate"
                                        placeholder="dd/mm/yyyy">

                                    @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-left p-0 address-label">Address:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="address" type="text" class="form-control" name="address"
                                        value="{{ old('address') }}" autocomplete="address"
                                        placeholder="Your address...">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-submit btn-update">
                                        Cập nhập
                                    </button>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-left p-0 email-label">Email:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="email" type="text" class="form-control" name="email"
                                        value="{{ old('email') }}" autocomplete="email" placeholder="Your email...">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="phone"
                                        class="col-md-4 col-form-label text-md-left p-0 phone-label">Phone:</label>
                                </div>

                                <div class="col-md-12">
                                    <input id="phone" type="text" class="form-control" name="phone"
                                        value="{{ old('phone') }}" autocomplete="phone" placeholder="Your phone...">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="about-me"
                                        class="col-md-4 col-form-label text-md-left p-0 about-me-label">About
                                        me:</label>
                                </div>

                                <div class="col-md-12">
                                    <textarea id="about-me" class="form-control about-textarea" name="about-me"
                                        value="{{ old('about-me') }}" autocomplete="about-me"
                                        placeholder="About you..."> </textarea>

                                    @error('about-me')
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
</div>
@endsection
