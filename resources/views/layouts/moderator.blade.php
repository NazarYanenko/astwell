@include('partials.admin.head')

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper">
    @include('partials.admin.header')
    @include('partials.admin.sidebar')

    <div class="content-wrapper" style="min-height: 960px;">
        @yield('content')
    </div>

</div>

</body>