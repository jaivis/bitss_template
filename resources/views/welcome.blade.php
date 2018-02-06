<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@lang('global.title')</title>
        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="display-4">
                            <b>BITSS</b>
                            <small>@lang('global.moto')</small>
                        </h1>
                    </div>
                </div>
            </header>

            <main>

                <div class="row">
                    {{--ifnromācija--}}
                    <section>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-uppercase text-center">Tu iegūsi</h2>
                            <ul class="list-unstyled">
                                <li>Bezmaksas mājaslapu</li>
                                <li>Uzstādīšanu bez maksas</li>
                                <li>Austāku pzoīciju Google rezultātos</li>
                                <li>Drošības sertifikātu</li>
                                <li>HTTP/2</li>
                                <li>SSL</li>
                            </ul>
                        </div>
                    </section>

                    {{--form--}}
                    <section>
                        <div class="col-xs-12 col-md-6">
                            <h2>Piesakies bezmaksas mājaslapai</h2>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="reg"
                                           placeholder="Uzņēmuma reģistrācijas numurs">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nos" placeholder="Uzņēmuma nosaukums">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="tel"
                                           placeholder="Tālrunis">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="ema" placeholder="E-Pasts">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </section>
                </div>
            </main>

            <footer>
                <!--div class="row">
                    <div class="col-xs-12">
                        <h3>Kontakti</h3>
                        <p>
                            info@bitss.lv
                        </p>
                    </div>
                </div-->
                <div class="row">
                    {{--<div class="col-xs-6 text-left supported">
                        <a href="//studija.it" target="_blank" title="@lang('global.supported')">
                            <svg version="1.1" id="Logo" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 468 111"
                                 style="enable-background:new 0 0 468 111;" xml:space="preserve">
                                <g>
                                    <path class="st0"
                                          d="M37.4,56.3c0,3.8,1.7,5.7,5,5.7h0.7v7.5c-8.9,0-13.4-3.6-13.4-10.9v-4.4c0-7.4,4.4-11.2,13.2-11.2h39.8v7.6   H42.4C39.1,50.6,37.4,52.5,37.4,56.3z M75.1,75.2c0-3.8-1.7-5.7-5-5.7h-0.7V62c4.4,0,7.7,0.9,10,2.6c2.3,1.8,3.4,4.5,3.4,8.3v4.4   c0,3.8-1,6.6-3.1,8.4c-2.1,1.9-5.4,2.8-10,2.8H29.7v-7.6h40.4C73.4,80.9,75.1,79,75.1,75.2z"/>
                                    <path class="st0" d="M133.8,43v7.6h-22.7v37.9h-7.6V50.6H80.8V43H133.8z"/>
                                    <path class="st0"
                                          d="M177.4,75.4V43h7.6v34c0,3.5-1.3,6.3-3.8,8.3c-2.5,2.1-5.9,3.1-10.2,3.1h-25.2c-4.3,0-7.6-1-10.2-3.1   c-2.5-2-3.8-4.8-3.8-8.3V43h7.6v32.3c0,1.5,0.5,2.8,1.6,3.9c1.1,1.1,2.4,1.6,4,1.6h26.7c1.5,0,2.9-0.5,3.9-1.5   C176.8,78.5,177.4,77.1,177.4,75.4z"/>
                                    <path class="st0"
                                          d="M234.5,75.4V56.2c0-1.9-0.6-3.4-1.6-4.2c-1.1-0.9-2.4-1.3-4-1.3H189V43h39.1c4.2,0,7.6,1,10.2,3.1   c2.5,2.1,3.8,4.8,3.8,8.3v22.6c0,3.5-1.3,6.3-3.8,8.3c-2.5,2.1-5.9,3.1-10.2,3.1H189V62h7.6v18.9h32.3c1.5,0,2.9-0.5,4-1.5   C233.9,78.5,234.5,77.1,234.5,75.4z"/>
                                    <path class="st0" d="M246.1,43h7.6v45.5h-7.6V43z"/>
                                    <path class="st0"
                                          d="M303.1,43h7.6v34c0,3.5-1.3,6.3-3.8,8.3c-2.5,2.1-5.9,3.1-10.2,3.1h-38.9v-7.6h38.8c0.8,0,1.5-0.1,2.3-0.4   c0.8-0.2,1.5-0.6,2.1-1.1c0.6-0.5,1.1-1.1,1.5-1.7s0.6-1.5,0.6-2.4V43z"/>
                                    <path class="st1"
                                          d="M351.6,50.6L375,88.5h-62.5l23.3-37.9c1.5-2.4,3-4.3,4.4-5.6c1.4-1.3,2.3-2,2.8-2h1.5c0.3,0,0.6,0.1,1,0.3   c0.4,0.2,0.9,0.6,1.4,1.2c0.5,0.6,1.2,1.3,2,2.3C349.7,47.8,350.6,49.1,351.6,50.6z M361.5,81l-17.7-28.5h-0.2L325.9,81H361.5z"/>
                                    <path class="st0" d="M384.5,80.9v7.6h-7.6v-7.6H384.5z"/>
                                    <path class="st0" d="M388.5,43h7.6v45.5h-7.6V43z"/>
                                    <path class="st0" d="M453.3,43v7.6h-22.7v37.9H423V50.6h-22.7V43H453.3z"/>
                                </g>
                            </svg>
                        </a>
                    </div>--}}
                    <div class="col-xs-12 text-right">
                        <span>&copy; Copyright 2018, <b>BITSS</b></span>
                    </div>
                </div>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
