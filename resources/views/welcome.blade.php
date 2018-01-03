@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <body>

            <div class="text-center" style="padding-top:60px">
                <h1>WELCOME</h1>
                </div>
                <div class="text" style="padding-top:60px; padding-left:300px; padding-right:300px">
            <h2>Ülesanne 1</h2><br>
                Looge andmebaasi newsDB (valige MySQL, SQLite, PostgreSQL...) ja tabelid news (id, title, description, pubDate, id_category, link), 
                category, user. Ainult registreeritud kasutajad võivad uudised lisada. Uudise lisamisel säilivad andmed andmebaasi ja failisse RSS xml. 
                Lehel peavad kuvastama 10 viimast uudist. Lisaks võib kasutaja vaadata RSS faili formateeritud kujul (XSLT).
                </div>
    </body>
</html>

@endsection
