<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- csrf-token 标签是为了方便前端的 JavaScript 脚本获取 CSRF 令牌 --}}

  <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  {{-- mix('css/app.css') 会根据 webpack.mix.js 的逻辑来生成 CSS 文件链接 --}}

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')
    {{-- 加载顶部导航区块的子模板 --}}

    <div class="container">

      @include('shared._messages')

      @yield('content')
      {{-- 占位符声明，允许继承此模板的页面注入内容 --}}

    </div>

    @include('layouts._footer')
    {{-- 加载页面尾部导航区块的子模板 --}}
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>