<title>Boobon</title>
<meta name="title" content="@yield('title', app('domain')->title) - {{app('domain')->title}}">
<meta name="shop-latitude" content="{{app('domain')->latitude}}">
<meta name="shop-longitude" content="{{app('domain')->longitude}}">

<meta name="description" content="@yield('description', app('domain')->description)">
<meta name="keywords" content="@yield('keywords', app('domain')->keywords)">

<meta property="og:site_name" content="{{app('domain')->title}}">
<meta property="og:url" content="{{ request()->url() }}">

<meta property="og:title" content="@yield('title', app('domain')->title) - {{app('domain')->title}}">
<meta property="og:description" content="@yield('description', app('domain')->description)">
<meta property="og:image" content="@yield('image', asset('images/placeholder-blog-preview.jpg'))">

<meta name="twitter:image" content="@yield('image', asset('images/placeholder-blog-preview.jpg'))">
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="{{ request()->url() }}">

<meta name="twitter:title" content="@yield('title', trans('home.site.title')) - {{app('domain')->title}}">
<meta name="twitter:description" content="@yield('description', app('domain')->description)">