<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{@$title?? config('app.name')}}</title>
    <link rel="icon" type="image/png" href="/images/fav-sc-icon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Scripts -->
   <script src='/js/jquery.js'></script>
   <script src='/js/select2.full.js'></script>
    <script src='/js/adminlte.js'></script>
    @vite([
        'resources/css/app.css',
        'resources/sass/app.scss',
        'resources/css/custom.css',
        'resources/js/app.js',
    ])

    @yield('css')
</head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layouts.header')

            @include('layouts.sidebar')

            <div class="content-wrapper" x-data="{loading: false}">
                <!-- Content Header (Page header) -->
                <div class="content-header" style="padding-bottom: 1px;padding-top: 5px;">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                @if (isset($bread_crums))
                                    <h1 class="m-0 color-sc">{{ array_key_last($bread_crums) }}</h1>
                                @endif

                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="/home"><i class="fa-solid fa-house-chimney"></i></a></li>
                                    @if (isset($bread_crums))
                                        @php $count = count($bread_crums); @endphp
                                        @foreach ($bread_crums as $text => $href)
                                            @php $is_last = --$count <= 0; @endphp <li class="breadcrumb-item">
                                                @if (!$is_last && $href !== 'last' && !empty($href))
                                                    <a href="{{ $href }}">{{ $text }}</a>
                                                    @else{{ $text }}
                                                @endif
                                            </li>
                                            @php
                                                if ($href === 'last') {
                                                    break;
                                                }
                                            @endphp
                                        @endforeach
                                    @endif
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>

                <div x-show="loading" class="position-fixed start-50 top-20">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="position-fixed top-0 right-0 bottom-0 left-0 bg-black opacity-20" style="z-index: 40;"></div>
                </div>
            </div>

            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>

            <div class="toast-container position-fixed top-0 right-2"></div>
        </div>

        @yield('js')
    </body>
</html>

