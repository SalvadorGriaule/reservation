@include("templats.header",["title" => "Liste des reservation"])
<main>
    @forelse ($reservation as $item)
    <div class="p-2 border border-black w-fit">
        <p>Départ de {{ $elem["gareDepart"] }} à {{ $elem["heureDepart"]}}</p>
        <p>Arriver à {{ $elem["gareArriver"] }} pour {{ $elem["heureArriver"]}}</p>
    </div>
    @empty
    <p>Pas de reservation</p>
    @endforelse
</main>
@include('templats.footer')
