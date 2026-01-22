@include("templats.header",["title" => "Faire une reservation"])
<main>
    <form action="/Reservation/create">
        <select name="trajet_id" id="">
            @forelse ($trajets as $item)
            <option value="{{ $item['id']}}">{{ $item['gareDepart']}} direction {{ $item['gareArriver']}} </option>
            @empty
            <p>Pas de trajet diponible</p>
            @endforelse
        </select>
        <input type="submit" value="Réserver" @disabled($trajets->isEmpty())>
    </form>
</main>
@include('templats.footer')
