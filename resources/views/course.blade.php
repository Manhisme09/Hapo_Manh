@extends('layouts.app')

@section('content')
<div class="container-fluid allcourse-body">
    <div class="allcourse">
        <div class="search">
            <div>
                <button class="btn btn-filter" id="filter-btn"><i class="fa-solid fa-arrow-down-wide-short"></i>
                    Filter</button>
            </div>
            <div class="group-search">
                <form method="GET" action="">
                    <div class="input"><input class="input-search" type="text" placeholder="Search..."
                            name="key_search"><span class="search-icon"><i
                                class="fa-solid fa-magnifying-glass"></i></span></div>
                    <button class="btn btn-search">Tìm Kiếm</button>
                </form>
            </div>
        </div>

        <div class=""></div>
    </div>
</div>
@endsection
