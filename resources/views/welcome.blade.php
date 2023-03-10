<x-layouts.app title="Home">

    <body class="antialiased bg-slate-100 dark:bg-slate-900">
        <header class="px-6 py-4 space-y-2 text-center">
            <h1 class="font-bold text-3xl dark:text-sky-500">Home</h1>
        </header>
    </body>
    <div class="container mx- px-40">
        <p class="text-white">

            @auth
                Authenticated User: {{ Auth::user()->name }}
                <br>
                Email: {{ Auth::user()->email }}
            @endauth

        </p>
    </div>

</x-layouts.app>
