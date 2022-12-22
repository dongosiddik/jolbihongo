<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">

        <span class="brand-text font-weight-light">Jolbihongo</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/user2.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        @if (Auth::user()->role->name == 'Admin')
            @include('partials.navbar')
        @else
            @include('partials.user-navbar')
        @endif


        {{-- <x-navbar /> --}}

    </div>

</aside>
