<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DashBoard 1</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="{{asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="app-layout">
        @include('layouts.header')
        @yield('content')
<!--        @include('layouts.slider')-->
        <!--        @include('layouts.footer')-->
        <script type="text/javascript">
            //basic slider js 
            $count = 1;
            $min_count = 1;
            $max_count = 7;
            function getPrev() {
                if ($count > $min_count) {
                    $count--;
                    document.getElementById('slider-element-id-' + $count).style.marginLeft = '0%';
                    document.getElementById('slider-element-id-' + $count).style.transition = ".1s";
                } else {
                    //alert('no prev element');
                }
            }
            function getNext() {
                //alert('col-'+$count);
                if ($count < $max_count) {
                    document.getElementById('slider-element-id-' + $count).style.marginLeft = '-25%';
                    document.getElementById('slider-element-id-' + $count).style.transition = ".1s";
                    $count++;
                } else {
                    //alert('no next element');
                }
            }
            //promo product slider js
            $promoProductSlider_Nav = "";
            $promoProductSlider_Count = 1;
            $promoProductSlider_Min = 1;
            $promoProductSlider_Max = 7;
            function promoProductSlider($id) {
                $promoProductSlider_Nav = $id.split('promo-slider-nav-navigation-btn-');
                if ($promoProductSlider_Nav[1] === 'next') {
                    getNextPromo($promoProductSlider_Count,$promoProductSlider_Max);
                } else if ($promoProductSlider_Nav[1] === 'prev') {
                    getPrevPromo($promoProductSlider_Count,$promoProductSlider_Min);
                }
            }
            function getNextPromo($promo_count,$promo_max){
                if ($promo_count < $promo_max) {
                    document.getElementById('promo-slider-element-id-' + $promo_count).style.marginLeft = '-25%';
                    document.getElementById('promo-slider-element-id-' + $promo_count).style.transition = ".1s";
                    $promo_count++;
                    $promoProductSlider_Count = $promo_count;
                } 
            }
            function getPrevPromo($promo_count,$promo_min){
                if ($promo_count > $promo_min) {
                    $promo_count--;
                    $promoProductSlider_Count = $promo_count;
                    document.getElementById('promo-slider-element-id-' + $promo_count).style.marginLeft = '0%';
                    document.getElementById('promo-slider-element-id-' + $promo_count).style.transition = ".1s";
                }
            }
        </script>
    </body>
</html>
