<div class="nav-top">
    <div class="container-fluid">
        <div class="row py-0">
            <div class="col-12 col-xl-2 col-md-4 col-sm-12 text-center text-md-right">
                @guest
                    <button type="button" class="btn btn-sm btn-light"
                            onclick="location.href='{{ url('/checking') }}'">Войти
                    </button>
                @endguest
                @auth
                    <div class="text-white">
                        <span class="font-weight-bold">{{Auth::user()->name}}</span>
                        <button type="button" class="btn btn-sm btn-light"
                                onclick="location.href='{{ url('/logout') }}'">Выйти
                        </button>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
<section id="navigation">
    @include('layouts.widgets.menu')
</section>
