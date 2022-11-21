The current UNIX timestamp is {{ time(), " " }}.
<br>

Hello, {{ $name, "\n"}}.
<br>
Hello, {!! $name . PHP_EOL . " sdsd"!!}.
<br>
@auth
   <br> The user is authenticated...
@endauth

@guest
     The user is not authenticated...
@endguest
<br>



