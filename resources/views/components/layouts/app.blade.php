<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="tallstackui_darkTheme()"
      x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-white': !darkTheme }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Wallace Andrade') }}</title>

    <style> [x-cloak] { display: none; } </style>

    <tallstackui:script />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-neutral-100 dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100">
    @include('components.layouts.navbar')

    {{ $slot }}

    @livewireScripts
</body>
</html>
