<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light null">
        <a class="navbar-brand" href="/">Bulletin Board</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="nav navbar-nav text-center">
                @guest
                    @inject('menu', 'App\Models\Menu\Menu')
                    @foreach ($menu::All() as $value)
                        @if ( ($value->name != "Личный кабинет") && ( $value->name != "Поставщики") )
                            <a class="nav-item nav-link" href="{{ url("$value->url") }}">{{$value->name}}</a>
                        @endif
                    @endforeach
                @endguest
                @auth
                    @if(Auth::user()->isRole('admin'))
                        @foreach ($menu as $value)
                            <a class="nav-item nav-link" href="{{ url("$value->url") }}">{{$value->name}}</a>
                        @endforeach
                    @elseif (!Auth::user()->isRole('admin'))
                        @foreach ($menu as $value)
                            @if ( ($value->name != "Дистрибьюторы") && ( $value->name != "Поставщики") )
                                <a class="nav-item nav-link" href="{{ url("$value->url") }}">{{$value->name}}</a>
                            @endif
                        @endforeach
                        @if (Auth::user()->isRole('distributor'))
                            @foreach ($menu as $value)
                                @if ( $value->name == "Дистрибьюторы")
                                    <a class="nav-item nav-link" href="{{ url("$value->url") }}">Мой кабинет</a>
                                @endif
                            @endforeach
                        @elseif (Auth::user()->isRole('provider'))
                            @foreach ($menu as $value)
                                @if ( $value->name == "Поставщики")
                                    <a class="nav-item nav-link" href="{{ url("$value->url") }}">Мой кабинет</a>
                                @endif
                            @endforeach
                        @endif
                    @endif
                @endauth
            </div>
        </div>
    </nav>
</div>
