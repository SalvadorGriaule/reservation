@include("templats.header",["title" => "Liste des trajets"])
<section class="mx-2 space-y-2">
    @forelse($trajet as $elem)
    <div class="p-2 border border-black w-fit">
        <p>Départ de {{ $elem["gareDepart"] }} à {{ $elem["heureDepart"]}}</p>
        <p>Arriver à {{ $elem["gareArriver"] }} pour {{ $elem["heureArriver"]}}</p>
    </div>    
    @empty
        <p>Pas de trajet</p>
    @endforelse
</section>
@include("templats.footer")