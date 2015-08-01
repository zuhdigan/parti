<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Participants List</title>
    
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('ParticipantsController@index') }}" class="navbar-brand">Participants List</a>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
