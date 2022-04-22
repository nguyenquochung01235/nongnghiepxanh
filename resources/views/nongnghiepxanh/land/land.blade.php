@extends('nongnghiepxanh.main')

@section('nongnghiep')
<main class="container s-mainnew grid grid--12">
    <div class="grid--span-7">
        <div>
            <h4 class="heading">
                <a href="#" class="heading__link link link--bold">
                    <i class="fas fa-sun"></i>
                    {{$title}}
                </a>
            </h4>
        </div>

        <section class="weather">
            <div class="weather_body">
                <div class="weather__top">
                    <div class="weather__data">
                        <img src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" class="weather__img" />
                        <div class="weather__temperature">
                            <span class="weather__temperature-number">34</span>
                            <span class="weather__temperature-unit">°C | °F</span>
                        </div>
                        <div class="weather__statistical">
                            <span>Độ ẩm: 46%</span>
                            <span>Gió: 11 km/h</span>
                        </div>
                    </div>
                </div>
                <div class="weather__middle">
                    <div class="weather__info">
                        <h3 class="weather__place">Ninh Kiều, Thành Phố Cần Thơ</h3>
                        <div class="weather__subhead">
                            <p>Thứ Bảy 11:00</p>
                            <p>Trời có mây rải rác</p>
                        </div>
                    </div>
                </div>
                <div class="weather__bottom">
                    <ul class="weather__list">
                        <li class="weather__item ">
                            <span id="monday" class="weather__day">3H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>24°</span></p>
                        </li>
                        <li class="weather__item ">
                            <span id="monday" class="weather__day">6H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>28°</span></p>
                        </li>
                        <li class="weather__item ">
                            <span id="monday" class="weather__day">9H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>30°</span></p>
                        </li>
                        <li class="weather__item active">
                            <span id="monday" class="weather__day">11H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>34°</span></p>
                        </li>
                        <li class="weather__item">
                            <span id="tuesday" class="weather__day">13H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>34°</span></p>
                        </li>
                        <li class="weather__item">
                            <span id="wednesday" class="weather__day">15H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>32°</span></p>
                        </li>
                        <li class="weather__item">
                            <span id="thursday" class="weather__day">18H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>30°</span></p>
                        </li>
                        <li class="weather__item">
                            <span id="friday" class="weather__day">21H</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>28°</span></p>
                        </li>
                    </ul>
                    <hr>
                    <ul class="weather__list">
                       
                        <li class="weather__item">
                            <span id="wednesday" class="weather__day">Th 4</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>34°</span><span>26°</span></p>
                        </li>
                        <li class="weather__item">
                            <span id="thursday" class="weather__day">Th 5</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>34°</span><span>26°</span></p>
                        </li>
                        <li class="weather__item " >
                            <span id="friday" class="weather__day">Th 6</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>34°</span><span>26°</span></p>
                        </li>
                        <li class="weather__item active" >
                            <span id="friday" class="weather__day">Th 7</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>34°</span><span>26°</span></p>
                        </li>
                        <li class="weather__item" >
                            <span id="friday" class="weather__day">CN</span>
                            <img class="weather__img weather__img--small" src="http://openweathermap.org/img/wn/02d@2x.png" alt="img" />
                            <p><span>34°</span><span>26°</span></p>
                        </li>
                    </ul>
                </div>
            </div>

        </section>


    </div>
</main>
@endsection