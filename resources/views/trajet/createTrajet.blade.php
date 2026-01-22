 @include('templats.header', ['title' => 'crée trajet'])
 <section>
     @if ($errors->any())
     <div class="bg-red-600 text-white">
         <ul>
             @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
     @endif
     <form class="flex flex-col space-y-2" action="/Trajet/create" method="POST">
         @csrf
         <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" type="text" value="{{ old('gareDepart') }}" placeholder="Gare de Départ" name="gareDepart">
         <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" type="text" value="{{ old('gareArriver') }}" placeholder="Gare d'arriver" name="gareArriver" id="">
         <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" type="datetime-local" placeholder="heure de départ" value="{{ old('heureDepart') }}" name="heureDepart" id="">
         <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" type="datetime-local" placeholder="heure d'arriver" value="{{ old('heureArriver') }}" name="heureArriver">
         <input type="number" placeholder="1.0" step="0.01" min="0.01" value="{{ old('prix') }}" name="prix">
         <input type="number" placeholder="1" value="{{ old('capacite') }}" name="capacite">
         <input class="bg-orange-500 rounded-lg text-white p-1 w-fit cursor-pointer" type="submit" value="Envoyer">
     </form>
 </section>
 @include('templats.footer')
