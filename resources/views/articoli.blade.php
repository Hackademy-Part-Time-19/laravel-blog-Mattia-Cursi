<x-layout>

  
<h1 id="titoloH1">{{$titoloArticoli}}</h1>


<div class="container">
    <div class="row">
        @foreach($articoli as $chiave => $articolo)

        <x-card
        :titolo="$articolo['title']"
        :categoria="$articolo['category']"
        :descrizione="$articolo['description']"
        :chiave="$chiave"
        >
        </x-card>

        @endforeach


    </div>
</div>

</x-layout>

