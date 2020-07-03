<nav class="navbar h-24 flex items-center border-b border-solid border-gray-400 py-8 px-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="nav-left">
            <p class="label font-bold tracking-wider"><a href="/"
                    class="p-2 px-2 md:px-8 bg-gray-100 hover:bg-gray-400 rounded whitespace-no-wrap md:text-3xl">Our
                    Films</a></p>
        </div>
        <div class="nav-right">
            <div class="menu items-center flex">
                @if(Auth::check())
                <a class="mx-2 bg-gray-200 p-2 rounded text-xs" href="/films/create">Add</a>

                <a class="bg-red-300 p-2 rounded text-xs" href="/logout">Logout</a>
                @endif

                @unless(Auth::check())
                <a class="mx-2 p-2 cursor-pointer rounded slab tracking-wider hover:underline text-xs"
                    id="show-login">Login</a>
                @endunless
            </div>
        </div>
    </div>
</nav>