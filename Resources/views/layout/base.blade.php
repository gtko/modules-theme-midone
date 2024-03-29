<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}">
<!-- BEGIN: Head -->

<head> 
    <meta charset="utf-8">
    <link href="{{ asset('img/logo_sm.png') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    @yield('head')

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css"
        integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.ckeditor.com/4.17.2/standard-all/ckeditor.js"></script>
    <!-- END: CSS Assets-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>

    <link rel="stylesheet" href="{{ mix('dist/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}" />


    <script>
        window.addEventListener("DOMContentLoaded", (event) => {
            document.querySelectorAll("[link]").forEach(function(element) {
                element.addEventListener("click", function(e) {
                    e.preventDefault();
                    window.location.href = element.getAttribute("link");
                });
            });

            document.querySelectorAll("[link-blank]").forEach(function(element) {
                element.addEventListener("click", function(e) {
                    e.preventDefault();
                    window.open(element.getAttribute("link-blank"), '_blank');
                });
            });


            document.querySelectorAll("[ignore-link]").forEach(function(element) {
                element.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Ignore link');
                });
            });
        });
    </script>

    @livewireStyles
    @bukStyles
    @stack('styles')
    @stack('script-head')
    <style>
        [x-cloak] {
            display: none;
        }

        [link] {
            cursor: pointer;
        }

        [link-blank] {
            cursor: pointer;
        }
    </style>

</head>
<!-- END: Head -->
@yield('body')

</html>
