<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <meta name="csrf-token" content="{{ @csrf_token() }}">
</head>
<body>

@include('modules.workout.programs.calendar.master.aside')

<section class="workout-calendar">
    @include('modules.workout.programs.calendar.master.header')

    <section class="workout-calendar__content">
        @yield('content')
    </section>
</section>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
