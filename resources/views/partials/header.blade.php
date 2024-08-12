  <div class="row">
    <div class="col-12 bg-black text-white text-center">
  @if (Route::has('login'))
  
      <nav class="-mx-3 flex flex-1">
          @auth
              <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                  Dashboard
              </a>
          @else
              <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:white focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                  Log in
              </a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:white focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                  >
                      Register
                  </a>
              @endif
          @endauth
          
      </nav>
  @endif
  </div>
</div>
<div class="row" id="header">
  <div class="col-12 bg-black text-white text-center">
    <h1>Editais</h1>
    <p>Informações</p>
  </div>
</div>
  


