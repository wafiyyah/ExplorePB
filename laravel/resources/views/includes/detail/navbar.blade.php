<!-- navbar -->
<nav class="menu">
        <div class="nav-brand">
             <h4>Pulau Besar</h4>
         </div>

        @guest
        <ul id="myLinks">
            <li><a href="{{ url('home') }}" class="hyper">Home</a></li>
            <li><a href="#" class="hyper">Artikel</a></li>
            <li><a href="#FOOTER" class="hyper">Kontak</a></li>
            <li class="login"><a href="{{ url('login') }}" class="button">Masuk</a></li>
        </ul>
        @endguest

        @auth
        <ul id="myLinks">
            <li><a href="{{ url('home') }}" class="hyper">Home</a></li>
            <li><a href="#" class="hyper">Artikel</a></li>
            <li><a href="#FOOTER" class="hyper">Kontak</a></li>
            <li class="login">
                <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="button" type="submit">
                        Keluar
                    </button>
                </form>
            </li>
        </ul>
        @endauth
</nav>