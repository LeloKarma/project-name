<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Other meta tags and links -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app" data-page="{{ json_encode($page) }}"></div>
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
