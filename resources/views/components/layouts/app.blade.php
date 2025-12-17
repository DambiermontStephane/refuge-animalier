<!doctype html>
<html lang="{!! app()->getLocale() !!}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Dambiermont Stéphane">
        <meta name="description" content="{{ __('headings.meta_description') }}">
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
    <header>
        <h1 class="sr-only">{{ __('headings.title') }}</h1>
        <x-nav/>
    </header>
    <main>
        {{ $slot }}
    </main>
        <x-footer.layout/>
    </body>
</html>
