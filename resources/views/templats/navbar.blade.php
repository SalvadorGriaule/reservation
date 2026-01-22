 <header class="flex justify-between items-center p-2">
     <a href="/">
         <h1 class="text-2xl ">CatBus</h1>
     </a>
     <nav class="flex space-x-2">
        <li class="list-none"><a href="/Trajet/">Liste des trajets</a></li>
         @guest
         <li class="list-none"><a href="/subscribe">Inscription</a></li>
         <li class="list-none"><a href="/login">Connection</a></li>
         @endguest
         @auth('admin')
         <li class="list-none"><a href="/Trajet/create">Crée un trajet</a></li>
         @endauth
         @auth
         <li class="list-none"><a href="/Categorie/create">Trajet</a></li>
         <li class="list-none"><a href="/Event/create">Réservation</a></li>
         @endauth
     </nav>
 </header>
