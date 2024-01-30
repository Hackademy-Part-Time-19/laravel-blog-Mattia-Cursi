<x-layout>

  
<h1 id="titoloH1">{{$titoloArticoli}}</h1>


<div class="container">
    <div class="row">
        @foreach($articoli as $chiave => $articolo)

        <x-card
        :titolo="$articolo['articolo']"
        :categoria="$articolo['categoria']"
        :descrizione="$articolo['descrizione']"
        :chiave="$chiave"
        >
        </x-card>

        @endforeach


    </div>
</div>

</x-layout>

