<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{implode(',', config('app.keywords'))}}">
    <meta name="description" content="{{implode(' ', config('app.keywords'))}}">
    <title>@lang('global.title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="container">
    <header>
        {{--brand / title--}}
        <div class="row">
            <div class="col-xs-12">
                <h1 class="display-4">
                    <b>BITSS</b>
                    <small>@lang('global.moto')</small>
                </h1>
            </div>
        </div>

        {{--into text--}}
        <div class="row">
            <div class="xol-xs-12 text-center text-uppercase">
                <p>
                    <h3><b>Uzņēmuma īpašniek, atstāj visu mūsu ziņā!</b></h3>
                    <h5>Lai izveidotu uzņēmuma mājaslapu rodas daudz lieku jautājumu un galvas sāpes - kā, ko, kur..
                        Uztici to mums, mēs visu izdarīsim Tavā vietā</h5>
                </p>
            </div>
        </div>

        {{--hashtags--}}
        <div class="row" style="margin-top: 25px;">
            <div class="col-xs-12">
                <ul class="list-inline text-center">
                    @foreach(config('app.keywords') as $keyword)
                        <li>
                            <h4>
                                <span class="label label-default">#<a href="https://www.google.lv/search?q={{urlencode($keyword)}}" target="_blank">{{$keyword}}</a></span>
                            </h4>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>


    </header>

    <main>

        <div class="row">
            {{--ifnromācija--}}
            <section>
                {{--<div class="col-xs-12 col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="text-uppercase text-center"><small>tava uzņēmuma</small> labumi</h2>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li>Visu izdarīsim mēs</li>
                            <li>Nekādu lieku tēriņu</li>
                            <li>Mūsdienīgs un viens no ātrākajiem serveriem Latvijā</li>
                            <li>Mājaslapa un uzstādīšana bez maksas</li>
                            <li>Bezmaksas rezerves kopiju veidošana</li>
                            <li>Augstāku pozīciju Google meklētājprogrammā</li>
                            <li>Mārketinga rīki</li>
                            <li>Google Analytics (redzi lapas skatījumus)</li>
                            <li>Google Tag Manager (mārketinga otimizācijai)</li>
                            <li>Drošības sertifikātu</li>
                            <li>Paaugstinātu lapas ielādes ātrumu (2x)</li>
                        </ul>
                    </div>
                </div>
            </div>--}}
                <div class="col-xs-12 col-sm-6 a-color" style="margin-top: 40px;">
                    <h2 class="text-uppercase text-center" style="margin: 28px 0px;">
                        <small>tava uzņēmuma</small>
                        <b>#ieguvums</b></h2>
                    <ul class="list-unstyled">
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Maksā tikai par uzturēšanu <span
                                    class="label label-default">izdevīgi</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Visu izdarīsim mēs <span
                                    class="label label-default">nedomā par to</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Nekādu lieku tēriņu uz mājas lapas
                            izstrādi <span class="label label-default">ietaupi</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Mājaslapa un uzstādīšana <span
                                    class="label label-default">bez maksas</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Responsīvs mājaslapas dizains <span
                                    class="label label-default">tālruņiem un planšetdatoriem</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Mūsdienīgs un viens no ātrākajiem
                            serveriem Latvijā <span class="label label-default">progresīvi</span></li>
                        {{--<li><span class="glyphicon glyphicon-chevron-down"></span> Bezmaksas rezerves kopiju veidošana</li>--}}
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Rezerves kopiju veidošana <span
                                    class="label label-default">bez maksas</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Augstāku pozīciju meklētājprogrammās (<a href="https://www.google.lv" target="_blank">Google</a> u.c)
                            <span class="label label-default">Vairāk redzams</span>
                        </li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Mārketinga rīki <span
                                    class="label label-default">bez maksas</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Reklāma Facebook <span
                                    class="label label-default">iegūsti jaunus klientus</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Google Analytics <span
                                    class="label label-default">seko līdzi mājaslapas statistikai</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Google Tag Manager <span
                                    class="label label-default">mārketinga otimizācija</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Drošības sertifikāts <span
                                    class="label label-default">vienmēr pasargāts</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Paaugstinātu lapas ielādes ātrumu
                            (2x) <span class="label label-default">zibenīgs</span></li>
                        <li><span class="glyphicon glyphicon-chevron-down"></span> Jaunākās tehnoloģijas
                            <span class="label label-default">nepaliec pagātnē</span></li>
                    </ul>
                </div>
            </section>

            {{--form--}}
            <section>
                <div class="col-xs-12 col-sm-6" style="margin-top: 40px;">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h2 class="text-uppercase text-center"><b>#piesakies</b>
                                <small>bezmaksas mājaslapai</small>
                            </h2>
                        </div>
                        <div class="panel-body">
                            @include('form.apply')
                        </div>
                    </div>
                    {{--<h2 class="text-uppercase text-center">piesakies <small>bezmaksas mājaslapai</small></h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" id="reg" placeholder="Uzņēmuma reģistrācijas numurs">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" id="nos" placeholder="Uzņēmuma nosaukums">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control input-lg" id="tel" placeholder="29907070" pattern="[0-9]{8}" title="8 ciparu telefona numurs">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" id="ema" placeholder="info@bitss.lv" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg col-xs-12">Pieteikties</button>
                    </form>--}}
                </div>
            </section>
        </div>
    </main>

    <footer>
    {{--<div class="supported">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 3192 928" enable-background="new 0 0 3192 928" xml:space="preserve">
<path id="right" fill="none" stroke="#404042" stroke-width="16" d="M2838.401,42.039H1306.25v853.334h1532.151
c183.687,0,332.599-148.911,332.599-332.6V374.638C3171,190.951,3022.088,42.039,2838.401,42.039z"/>
            <path id="left" fill="none" stroke="#404042" stroke-width="16" d="M1306.269,42.039H372.599C188.911,42.039,40,190.951,40,374.638
v188.135c0,183.688,148.911,332.6,332.599,332.6h933.669V42.039z"/>
            <path fill="#00E500" d="M502.441,411.108h-31.172c0.946-51.785,0.96-92.727-33.219-113.411
c-17.495-10.588-44.183-15.479-71.269-15.365c-27.084-0.114-53.772,4.777-71.268,15.365c-34.18,20.684-34.164,61.626-33.218,113.411
h-31.236c-5.948,0-10.768,4.82-10.768,10.768v199.798c0,5.947,4.82,10.769,10.768,10.769h271.382
c5.947,0,10.768-4.821,10.768-10.769V421.876C513.209,415.928,508.388,411.108,502.441,411.108z M324.637,326.821
c9.369-3.609,22.996-5.341,37.44-5.441v0.156c1.571-0.064,3.14-0.102,4.704-0.128c1.566,0.026,3.134,0.064,4.705,0.128v-0.156
c14.445,0.101,28.071,1.832,37.442,5.441c27.393,10.552,26.918,47.292,26.617,84.287H298.02
C297.717,374.113,297.243,337.373,324.637,326.821z"/>
            <g>
                <path fill="#404042" d="M1433.338,354.42h26.928v92.718h0.613c4.283-7.65,11.016-14.688,19.277-19.278
c7.957-4.59,17.441-7.344,27.541-7.344c19.889,0,51.713,12.24,51.713,63.036v88.128h-26.928v-85.068
c0-23.868-8.875-43.758-34.271-43.758c-17.443,0-30.906,12.24-36.109,26.622c-1.529,3.978-1.836,7.956-1.836,12.852v89.352h-26.928
V354.42z"/>
                <path fill="#404042" d="M1634.379,388.08v35.496h38.557v20.502h-38.557v79.866c0,18.36,5.201,28.764,20.195,28.764
c7.344,0,11.629-0.612,15.607-1.836l1.223,20.502c-5.201,1.836-13.463,3.672-23.867,3.672c-12.547,0-22.645-4.284-29.07-11.322
c-7.344-8.262-10.404-21.42-10.404-38.862v-80.784h-22.949v-20.502h22.949v-27.54L1634.379,388.08z"/>
                <path fill="#404042" d="M1735.664,388.08v35.496h38.555v20.502h-38.555v79.866c0,18.36,5.201,28.764,20.195,28.764
c7.344,0,11.627-0.612,15.605-1.836l1.225,20.502c-5.203,1.836-13.465,3.672-23.869,3.672c-12.545,0-22.643-4.284-29.068-11.322
c-7.346-8.262-10.404-21.42-10.404-38.862v-80.784h-22.951v-20.502h22.951v-27.54L1735.664,388.08z"/>
                <path fill="#404042" d="M1804.512,471.924c0-18.972-0.613-34.272-1.225-48.348h23.869l1.529,25.398h0.611
c10.711-18.054,28.459-28.458,52.633-28.458c36.107,0,63.035,30.294,63.035,74.97c0,53.244-32.742,79.56-67.625,79.56
c-19.584,0-36.721-8.568-45.594-23.256h-0.613v80.478h-26.621V471.924z M1831.133,511.398c0,3.978,0.307,7.65,1.225,11.016
c4.896,18.666,21.113,31.518,40.393,31.518c28.457,0,44.98-23.256,44.98-57.222c0-29.376-15.605-54.774-44.063-54.774
c-18.361,0-35.803,12.852-40.699,33.048c-0.918,3.366-1.836,7.344-1.836,10.71V511.398z"/>
                <path fill="#00E500" d="M1974.949,544.446c8.262,4.896,22.338,10.404,35.801,10.404c19.279,0,28.459-9.486,28.459-22.032
c0-12.852-7.65-19.584-27.234-26.928c-26.928-9.792-39.475-24.174-39.475-41.922c0-23.868,19.584-43.452,51.104-43.452
c14.992,0,28.15,3.978,36.107,9.18l-6.426,19.584c-5.814-3.672-16.525-8.874-30.295-8.874c-15.912,0-24.48,9.18-24.48,20.196
c0,12.24,8.568,17.748,27.848,25.398c25.396,9.486,38.861,22.338,38.861,44.37c0,26.316-20.502,44.676-55.08,44.676
c-16.219,0-31.213-4.284-41.615-10.404L1974.949,544.446z"/>
                <path fill="#404042" d="M2093.676,448.056c0-11.322,7.65-19.278,18.053-19.278c11.018,0,18.055,7.956,18.055,19.278
c0,10.71-7.037,18.972-18.359,18.972C2101.02,467.028,2093.676,458.766,2093.676,448.056z M2093.676,556.074
c0-11.322,7.65-19.278,18.053-19.278c11.018,0,18.055,7.956,18.055,19.278c0,10.71-7.037,18.972-18.359,18.972
C2101.02,575.046,2093.676,566.784,2093.676,556.074z"/>
                <path fill="#404042" d="M2140.488,583.614l85.068-221.85h21.113l-85.68,221.85H2140.488z"/>
                <path fill="#404042" d="M2245.443,583.614l85.066-221.85h21.115l-85.68,221.85H2245.443z"/>
                <path fill="#404042" d="M2383.75,423.576l19.891,75.276c3.979,16.524,7.955,31.824,10.709,47.124h0.92
c3.365-14.994,8.262-30.906,13.156-46.818l24.174-75.582h22.645l22.951,74.052c5.508,17.748,9.791,33.354,13.156,48.348h0.918
c2.449-14.994,6.428-30.6,11.322-48.042l21.115-74.358h26.621l-47.736,148.104h-24.479l-22.645-70.686
c-5.203-16.524-9.486-31.212-13.158-48.654h-0.611c-3.672,17.748-8.262,33.048-13.465,48.96l-23.867,70.38h-24.48l-44.676-148.104
H2383.75z"/>
                <path fill="#404042" d="M2612.635,423.576l19.889,75.276c3.979,16.524,7.957,31.824,10.711,47.124h0.918
c3.365-14.994,8.262-30.906,13.158-46.818l24.174-75.582h22.645l22.949,74.052c5.508,17.748,9.793,33.354,13.158,48.348h0.918
c2.447-14.994,6.426-30.6,11.322-48.042l21.113-74.358h26.623l-47.736,148.104h-24.48l-22.645-70.686
c-5.201-16.524-9.484-31.212-13.158-48.654h-0.611c-3.672,17.748-8.262,33.048-13.463,48.96l-23.869,70.38h-24.48l-44.676-148.104
H2612.635z"/>
                <path fill="#404042" d="M2841.518,423.576l19.891,75.276c3.979,16.524,7.955,31.824,10.709,47.124h0.92
c3.365-14.994,8.262-30.906,13.156-46.818l24.174-75.582h22.645l22.951,74.052c5.508,17.748,9.791,33.354,13.156,48.348h0.918
c2.449-14.994,6.428-30.6,11.322-48.042l21.115-74.358h26.621l-47.736,148.104h-24.479l-22.645-70.686
c-5.203-16.524-9.486-31.212-13.158-48.654h-0.611c-3.672,17.748-8.262,33.048-13.465,48.96l-23.867,70.38h-24.48l-44.676-148.104
H2841.518z"/>
            </g>
            <g>
                <path fill="#00E500" d="M642.65,534.419c8.19,5.25,19.951,9.24,32.551,9.24c18.69,0,29.611-9.87,29.611-24.151
c0-13.02-7.561-20.791-26.671-27.931c-23.101-8.4-37.381-20.581-37.381-40.321c0-22.051,18.271-38.431,45.781-38.431
c14.28,0,24.99,3.36,31.081,6.93l-5.04,14.911c-4.41-2.73-13.86-6.72-26.671-6.72c-19.321,0-26.671,11.55-26.671,21.21
c0,13.23,8.61,19.741,28.141,27.301c23.94,9.24,35.911,20.791,35.911,41.582c0,21.84-15.961,40.951-49.352,40.951
c-13.65,0-28.561-4.2-36.121-9.24L642.65,534.419z"/>
                <path fill="#00E500" d="M759.41,509.218c0.42,24.991,16.17,35.281,34.861,35.281c13.229,0,21.42-2.31,28.141-5.25l3.36,13.23
c-6.511,2.94-17.851,6.51-34.021,6.51c-31.291,0-49.981-20.791-49.981-51.452s18.061-54.602,47.671-54.602
c33.392,0,42.002,28.981,42.002,47.671c0,3.78-0.21,6.51-0.63,8.61H759.41z M813.592,495.988c0.21-11.55-4.83-29.821-25.621-29.821
c-18.9,0-26.881,17.01-28.351,29.821H813.592z"/>
                <path fill="#00E500" d="M926.78,553.109c-4.83,2.31-15.541,5.88-29.191,5.88c-30.661,0-50.611-20.791-50.611-51.872
c0-31.291,21.421-54.182,54.602-54.182c10.92,0,20.581,2.73,25.621,5.46l-4.2,14.07c-4.41-2.31-11.341-4.83-21.421-4.83
c-23.311,0-35.911,17.431-35.911,38.431c0,23.521,15.12,38.011,35.281,38.011c10.5,0,17.431-2.52,22.681-4.83L926.78,553.109z"/>
                <path fill="#00E500" d="M1033.459,528.749c0,10.71,0.21,19.95,0.841,27.931h-16.381l-1.05-16.59h-0.42
c-4.62,8.19-15.541,18.9-33.602,18.9c-15.96,0-35.071-9.03-35.071-44.521v-59.432h18.48v56.072c0,19.32,6.091,32.551,22.681,32.551
c12.391,0,21.001-8.61,24.361-17.01c1.05-2.521,1.68-5.88,1.68-9.451v-62.162h18.48V528.749z"/>
                <path fill="#00E500" d="M1064.115,486.748c0-11.971-0.21-22.261-0.84-31.711h16.171l0.84,20.161h0.63
c4.62-13.65,15.961-22.261,28.352-22.261c1.89,0,3.359,0.21,5.04,0.42v17.431c-1.891-0.42-3.78-0.42-6.301-0.42
c-13.021,0-22.261,9.661-24.78,23.521c-0.42,2.52-0.63,5.67-0.63,8.61v54.182h-18.481V486.748z"/>
                <path fill="#00E500" d="M1140.976,509.218c0.42,24.991,16.17,35.281,34.86,35.281c13.23,0,21.421-2.31,28.142-5.25l3.36,13.23
c-6.511,2.94-17.851,6.51-34.021,6.51c-31.291,0-49.981-20.791-49.981-51.452s18.061-54.602,47.671-54.602
c33.392,0,42.002,28.981,42.002,47.671c0,3.78-0.21,6.51-0.63,8.61H1140.976z M1195.157,495.988
c0.21-11.55-4.83-29.821-25.621-29.821c-18.9,0-26.881,17.01-28.351,29.821H1195.157z"/>
            </g>
</svg>
    </div>--}}
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
