<nav class="navbar h-24 flex items-center border-b border-solid border-gray-400 py-8 px-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="nav-left bg-gray-200 py-2 px-8 rounded">
            <p class="label font-bold text-xl tracking-wider">Our Films</p>
        </div>
        <div class="nav-right">
            <div class="menu">
                @if(Auth::check())
                <a class="mx-2" href="#">Add or Remove Films</a>
                @endif
                <a class="mx-2 bg-blue-400 p-2 rounded text-white" href="#">Login</a>
            </div>
        </div>
    </div>
</nav>