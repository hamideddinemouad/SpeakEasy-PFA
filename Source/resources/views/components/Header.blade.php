<style>
    .burger-line {
      width: 25px;
      height: 3px;
      background-color: #F5F5F5;
      margin-bottom: 4px;
      display: block;
    }
</style>

<header class="bg-[#001F3F] text-[#F5F5F5] py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
        <a href="/" class="text-xl font-semibold">SpeakEasy Academy</a>

        <button id="burgerBtn" class="burger-icon focus:outline-none md:hidden">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
          </button>

        <nav class="hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-[#FFD700]">Accueil</a></li>
                <li><a href="/about" class="hover:text-[#FFD700]">À propos</a></li>
                <li><a href="/programs" class="hover:text-[#FFD700]">Cours</a></li>
                <li><a href="/quiz" class="hover:text-[#FFD700]">Quiz</a></li>
                @if(Auth::check())
                @php
                $dashboard = (Auth::user()->role . "dashboard");
                @endphp
                    <li><a href="/logout" class="hover:text-[#FFD700]">Déconnexion </a></li>
                    <li><a href={{$dashboard}} class="hover:text-[#FFD700]">Dashboard</a></li>
                @else
                    <li><a href="/Login" class="hover:text-[#FFD700]">Connexion</a></li>
                    <li><a href="/Signup" class="hover:text-[#FFD700]">S'enregistrer</a></li>
                @endif
            </ul>
        </nav>

    </div>

    <!-- Collapsed Menu Items (Mobile Only) -->
    <nav id="menu" class="hidden md:hidden px-4 py-2">
        <ul class="space-y-2">
            <li><a href="/" class="hover:text-[#FFD700]">Accueil</a></li>
            <li><a href="/about" class="hover:text-[#FFD700]">À propos</a></li>
            <li><a href="/courses" class="hover:text-[#FFD700]">Cours</a></li>
            <li><a href="/quiz" class="hover:text-[#FFD700]">Quiz</a></li>
            <li><a href="/Login" class="hover:text-[#FFD700]">Connexion</a></li>
        </ul>
    </nav>
</header>

<script defer>
    const burgerBtn = document.getElementById('burgerBtn');
    const menu = document.getElementById('menu');

    burgerBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>