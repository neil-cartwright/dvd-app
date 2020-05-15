<nav class="navbar h-24 flex items-center border-b border-solid border-gray-400 py-8 px-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="nav-left">
            <p class="label font-bold text-xl tracking-wider"><a href="/"
                    class="p-2 px-8 bg-gray-300 hover:bg-gray-400 rounded">Our Films</a></p>
        </div>
        <div class="nav-right">
            <div class="menu items-baseline flex">
                @if(Auth::check())
                <a class="mx-2 bg-gray-200 p-2 rounded" href="/films/create">Add Films</a>
                <a class="mx-2 bg-gray-200 p-2 rounded" href="films/delete">Remove Films</a>

                <a class="bg-red-300 p-2 rounded" href="/logout">Logout</a>
                @elseif(!Request::is('/'))
                <a class="mx-2 bg-blue-400 p-2 rounded text-white" href="/">Login</a>
                @endif
            </div>
        </div>
    </div>
</nav>