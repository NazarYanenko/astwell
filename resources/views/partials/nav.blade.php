<header>
    <div class="wrapper">
        <div class="logo">
            <a href="/"><img src="{{asset('img/logo.png')}}" alt="logo"/></a>
        </div>
        <a href="#" class="write_review_btn">Написать отзыв</a>

        <div class="sign_in_reg_block">
            <ul class="nav navbar-nav navbar-right custom-menu-btn">
                @if(Auth::guest())
                    <li class="last-link sing-link">
                        <a href="#">Sign In<i class="fa fa-align-center fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li class="last-link signup-link">
                        <a href="#">Sign Up
                            <i class="fa fa-align-center fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                @else
                    <li class="last-link"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>Виход</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                @endif
            </ul>
            <label for="search">
                <input type="text" id="search" placeholder="Поиск">
                <i class="fa fa-search" aria-hidden="true"></i>
            </label>
        </div>
    </div>
</header>