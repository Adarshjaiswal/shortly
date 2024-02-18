<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shortly</title>

    @vite(['resources/js/app.js'])

    <script>
        window.loggedIn = @json(auth()->check());
        window.user = @json(auth()->user());
    </script>
</head>

<body class="antialiased bg-gray-900 text-white">
    <div id="app"></div>
</body>
<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="krishj067i" data-description="Support me on Buy me a coffee!" data-message="Your support helps keep the code brewing and the ideas flowing. Thank you for being a part of this caffeinated journey!" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
</html>
