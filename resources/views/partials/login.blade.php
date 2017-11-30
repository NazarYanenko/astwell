<div class="registration-content login_container">
    <div class="col-xs-4 col-xs-offset-4">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <ul id="error"></ul>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Электронная почта</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Пароль</label>
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</label>
                </div>
            </div>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="btn">Login</button>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <a href="/">Виийти<i class="fa fa-align-center fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
        </form>
        <a href="auth/vkontakte">Vkontakte<i class="fa fa-align-center fa-2x" aria-hidden="true"></i></a>
        <a href="auth/facebook">Facebook<i class="fa fa-align-center fa-2x" aria-hidden="true"></i></a>
    </div>

</div>

<script src="{{ url('/') }}/AjaxLogin/AjaxLogin.js"></script>

<script>
    AL = new Login({
        email: "email",
        password: "password",
        btn: "btn",
        url: "/login",
        successUrl: "/",
        mode: "toast" ///alert or toast
    });
</script>