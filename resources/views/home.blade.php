@extends('layouts.app')

@section('content')

<section>
    <div class="banner" style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="banner_title">
            <p class="banner_title_first">Learn Anytime, Anywhere <br> <span>at HapoLearn<span><img
                            src="{{ asset('images/concu.png') }}" alt=""></span>!</span>
            </p>
            <p class="banner_title_second">Interactive lessons, "on-the-go" <br> practice, peer support.</p>
            <div class="btn-start">
                <p class="btn-start-title">Start Learning Now!</p>
            </div>
        </div>
    </div>
</section>
@endsection