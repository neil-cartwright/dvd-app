 <div class="left-side db p-2">
     <div>
         <a href="/">All films</a>
     </div>
     <div>
         Current Search: <span class="p-2 bg-red-400
             font-semibold">{{ request()->segment(count(request()->segments())) }}</span>
     </div>
     <label for="film-search">Search films</label>
     <form action="
     ">
         <input id="film-search"
             class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
             type="email" placeholder="jane@example.com">
     </form>

 </div>