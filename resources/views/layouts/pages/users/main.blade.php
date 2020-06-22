@extends ('layouts.app')
@if (session()->has('success_join'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_join') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session()->has('success_exit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success_exit') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@section ('content')
    <div id="finders" class="blocks_ratio">
        <div class="container">
            <div class="row align-self-center">
                <div class="col-xs-6 col-sm-12 col-md col-lg-6 col-xl-6">
                    <div class="find blocks_ratio">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-sm-12 col-md col-lg col-xl">
                                    <img src="{{URL::asset('/images/imp.png')}}" height="197" width="242">
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md col-lg col-xl">
                                    <div class="f_text">
                                        <h4><b>Для импортеров</b></h4>
                                        <p>Если вы импортируете товары в Украину и являетесь "первыми руками"</p>
                                        <h4><b>Для производителей</b></h4>
                                        <p>Если вы импортируете товары в Украину и являетесь "первыми руками"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs col-sm col-md-1 col-lg-2 col-xl-3"></div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-6">
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-blue" onclick="location.href='{{ url('/checking') }}';">Найти дистрибьюторов</button>
                                </div>
                                <div class="col-xs col-sm col-md-1 col-lg-2 col-xl-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-12 col-md col-lg-6 col-xl-6">
                    <div class="find blocks_ratio">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-sm-12 col-md col-lg col-xl">
                                    <img src="{{URL::asset('/images/dist.png')}}" height="197" width="242">
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md col-lg col-xl">
                                    <div class="f_text">
                                        <h4><b>Для дистрибьюторов</b></h4>
                                        <p>Если вы поставляете товарыв в регионы Украины или имеете свои сети сбыта</p>
                                        <h4><b>Для оптовиков</b></h4>
                                        <p>Если вы поставляете товарыв в регионы Украины или имеете свои сети сбыта</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs col-sm col-md-1 col-lg-2 col-xl-3"></div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-6">
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-blue" onclick="location.href='{{ url('/checking') }}';">Найти поставщиков</button>
                                </div>
                                <div class="col-xs col-sm col-md-1 col-lg-2 col-xl-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="counters" class="blocks_ratio">
        <div class="container">
            <div class="blocks_back_paddings">
                <div class="row">
                    <div class="col-xs-6 col-sm-12 col-md col-lg col-xl align-self-center">
                        <div class="container">
                            <div class="counter">
                                <div class="row align-self-center">
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-center">
                                        <img src="{{URL::asset('/images/3_1.png')}}" height="24" width="24">
                                    </div>
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-center">
                                        <img src="{{URL::asset('/images/3_2.png')}}" height="24" width="24">
                                    </div>
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-center">
                                        <img src="{{URL::asset('/images/3_3.png')}}" height="24" width="24">
                                    </div>
                                </div>
                                <div class="count-1">
                                    356
                                </div>
                                <div class="counter_field">
                                    Поставщиков
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md col-lg col-xl align-self-center">
                        <div class="container">
                            <div class="counter">
                                <div class="row">
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-center">
                                        <img src="{{URL::asset('/images/3_2_1.png')}}" height="24" width="24">
                                    </div>
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-end">
                                        <img src="{{URL::asset('/images/3_2_2.png')}}" height="24" width="24">
                                    </div>
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-end">
                                        <img src="{{URL::asset('/images/3_2_3.png')}}" height="24" width="24">
                                    </div>
                                </div>
                                <div class="count-1">
                                    356 000
                                </div>
                                <div class="counter_field">
                                    Товаров добавлено
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md col-lg col-xl align-self-center">
                        <div class="container">
                            <div class="counter">
                                <div class="row">
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-center">
                                        <img src="{{URL::asset('/images/3_3_1.png')}}" height="24" width="24">
                                    </div>
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-end">
                                        <img src="{{URL::asset('/images/3_3_2.png')}}" height="24" width="24">
                                    </div>
                                    <div class="col-4 col-xs-3 col-sm-4 col-md col-lg col-xl align-self-end">
                                        <img src="{{URL::asset('/images/3_3_3.png')}}" height="24" width="24">
                                    </div>
                                </div>
                            </div>
                            <div class="count-1">
                                1340
                            </div>
                            <div class="counter_field">
                                Дистрибьюторов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="shows" class="blocks_ratio">
        <div class="container">
            <div class="blocks_back_paddings">
                <div class="row align-self-center">
                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-5 col-xl align-self-center">
                        <div class="tovblock">
                            <div class="postov">
                                <div class="shows_title">
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-8 col-md-5 col-lg-6 col-8 col-xl-8 text-left ">
                                            ПОСТАВЩИКИ
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-7 col-lg-6 col-4 col-xl-4 tetx-right">
                                            <a href="{{ url('/checking') }}">Войти как поставщик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="table">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Поставщик</th>
                                            <th>Активность</th>
                                            <th>Дата</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#FR524-09</td>
                                            <td>Обновил все остатки по товарам</td>
                                            <td>03.09.19</td>
                                        </tr>
                                        <tr>
                                            <td>#ПК245</td>
                                            <td>Уведомляет о поступлении новой партии товара</td>
                                            <td>03.09.19</td>
                                        </tr>
                                        <tr>
                                            <td>#GRD45</td>
                                            <td>Уведомляет о обновлении цен на товары</td>
                                            <td>03.09.19</td>
                                        </tr>
                                        <tr>
                                            <td>#GRD45</td>
                                            <td>Уведомляет о новых акционных товарных позициях</td>
                                            <td>03.09.19</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-5 col-xl align-self-center">
                        <div class="tovblock">
                            <div class="newtov">
                                <div class="shows_title">
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-8 col-md-5 col-lg-6 col-6 col-xl-7 text-left">
                                            НОВЫЙ ТОВАР
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-7 col-lg-6 col-6 col-xl-5 text-right">
                                            <a href="{{ url('/checking') }}">Войти как дистрибьютор</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="table">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Артикул</th>
                                            <th>Название</th>
                                            <th>Статус</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#FR524-09</td>
                                            <td>Куртка джинсовая Армани</td>
                                            <td>Добавлен товар</td>
                                        </tr>
                                        <tr>
                                            <td>#FR524-09</td>
                                            <td>Брюки джинсовые</td>
                                            <td>Цена обновлена</td>
                                        </tr>
                                        <tr>
                                            <td>#FR524-09</td>
                                            <td>Футболка белая с линиями</td>
                                            <td>Добавлен товар</td>
                                        </tr>
                                        <tr>
                                            <td>#FR524-09</td>
                                            <td>Куртка джинсовая Армани</td>
                                            <td>Удален товар</td>
                                        </tr>
                                        <tr>
                                            <td>#FR524-09</td>
                                            <td>Брюки джинсовые</td>
                                            <td>Цена обновлена</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="regs" class="blocks_ratio">
        <div class="container">
            <div class="blocks_back_paddings">
                <div class="row justify-content-center">
                    <div class="col-6 col-xs-4 col-sm-6 col-md-6 col-lg-6 col-xl align-self-center">
                        <button type="button" class="btn btn-blue" onclick="location.href='{{ url('/checking') }}';"><span>ПОСТАВЩИКАМ</span> <br> зарегестрироваться</button>
                    </div>
                    <div class="col-10 col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl align-self-center">
                        <img src="{{URL::asset('/images/ie.png')}}" height="221" width="332">
                    </div>
                    <div class="col-6 col-xs-4 col-sm-6 col-md-6 col-lg-6 col-xl align-self-center">
                        <button type="button" class="btn btn-blue" onclick="location.href='{{ url('/checking') }}';"><span>ДИСТРИБЬЮТОРАМ</span> <br>зарегистрироваться</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
