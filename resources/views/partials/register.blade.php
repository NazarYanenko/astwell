<div class="registration-content register_container">
    <div class="panel panel-default">
        <div class="panel-heading">Register</div>

        <div class="panel-body">
            <div id="error"></div>
            <form class="form-horizontal" method="POST" id="signup-form" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Имя</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Фамилия</label>

                    <div class="col-md-6">
                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                        @if ($errors->has('last_name'))
                            <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Электронная почта</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Пароль</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Подтвердите пароль</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block"><strong>{{ $errors->first('g-recaptcha-response') }}</strong></span>
                @endif

                <div class="g-recaptcha" data-sitekey="6LdgTTcUAAAAAK1NRiIx7A-2em1IOORmZP_b3QIF"></div>
                {{--<div class="errors" id="errors" style="display: none"></div>--}}

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" value="Send" class="btn btn-primary" id="submit">
                            Зарегистрироваться
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <a href="/">Виийти<i class="fa fa-align-center fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $("#signup-form").on('submit', function (e) {
e.preventDefault();
        $.ajax(
            {
                url: "/register",
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(result){
                    var globData = result['email'][0];
                    alert(globData);
        },
            error: function () {
                location.reload();
            }
            });
    });
</script>
