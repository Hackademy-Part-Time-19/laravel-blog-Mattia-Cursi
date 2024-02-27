<x-layout>

<h1 id="titoloH1">Gestione tickets mail</h1>
<div>
    <h1 id="titoloH1">Elenco tickets</h1>
    @foreach ($tickets as $id => $ticket)
        <x-tickets-card
            :id="$id"
            :name="$ticket['name']"
            :date="$ticket['created_at']"
            :content="$ticket['status']"
        >



        </x-tickets-card>    
    @endforeach



</div>

</x-layout>