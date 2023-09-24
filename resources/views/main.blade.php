<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Style sheets-->
     <link href="{{asset(mix('main.css', 'vendor/auth'))}}" rel="stylesheet">

    @routes
    @inertiaHead
</head>
<body class="overflow-hidden h-100" style="height: 100%" >
@inertia
<script src="{{asset(mix('manifest.js', 'vendor/auth'))}}"></script>
<script src="{{asset(mix('vendor.js', 'vendor/auth'))}}"></script>
<script src="{{asset(mix('main.js', 'vendor/auth'))}}"></script>
</body>
</html>
