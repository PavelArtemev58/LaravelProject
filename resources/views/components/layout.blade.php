<!DOCTYPE html>
<html>
    <head>
	<title>{{ $title }}</title>
    </head>
    
    <body>
        <div class="wrapper">
            <x-header.header/>
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>