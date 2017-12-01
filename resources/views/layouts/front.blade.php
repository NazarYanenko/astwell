<!doctype html>
<html lang="en">
@include('partials.front.head')

<body>

<div id="app" class="wrapper">

    @include('partials.front.nav')


    <nav class="navbar top-navigation fixed-top ">

        <div class="container">
            <div class="row d-flex flex-row align-items-center w-100 customClass">
                <div class="col-10 text-center ">
                    <form action="{{route('catalog')}}">
                        <label>Date:</label> <input type="date" name="date" />
                        <label>Time:</label> <input type="time" name="time" />
                        <input class="btn btn-outline-danger" type="submit" name="submit"/>
                    </form>
                </div>
                <div class="col-2 text-right">

                    <label for="menu-btn">
                        menu
                    </label>

                    <button v-on-clickaway="menuAway" @click="menu = !menu" id="menu-btn" class="navbar-toggler navbar-toggler-right" type="button">
                        <i class="ion-grid" aria-hidden="true"></i>
                    </button>

                </div>

            </div>
        </div>

    </nav>



    <div class="page">

        @yield('content')


    </div>

</div>

<script src="{{asset('js/vue.js')}}"></script>
<!--<script src="js/vue.min.js"></script>-->
<script src="{{asset('js/vue-strap.js')}}"></script>
<script src="https://cdn.rawgit.com/simplesmiler/vue-clickaway/2.1.0/dist/vue-clickaway.js"></script>
<script>
    new Vue({
        el:'#app',
        mixins: [VueClickaway.mixin],
        data:{
            menu:false,
        },
        methods:{
            menuAway:function () {
                this.menu = false;
            }

        }
    });
</script>

</body>
</html>
