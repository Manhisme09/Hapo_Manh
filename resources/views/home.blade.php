@extends('layouts.app')

@section('content')

<section>
    <div class="banner" style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="banner-title">
            <p class="banner-title-first">Learn Anytime, Anywhere <br> <span>at HapoLearn<span><img
                            src="{{ asset('images/owl.png') }}" alt=""></span>!</span>
            </p>
            <p class="banner-title-second">Interactive lessons, "on-the-go" <br> practice, peer support.</p>
            <div class="btn-start">
                <p class="btn-start-title">Start Learning Now!</p>
            </div>
        </div>
    </div>
</section>
@endsection
