@include('layouts.head')
@include('layouts.header')
<div CLASS="row">
    <div class="col-md-3">
        @include('layouts.sidebar')
    </div>
    <div class="col-md-9">
        @yield('content')
    </div>
    @include('layouts.footer')
</div>