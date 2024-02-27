<x-layout>
    <h1 id="titoloH1">Dettaglio ticket</h1>
    <div>
        <h1 id="titoloH1">Elenco tickets</h1>

        @if (session()->has('success'))
         <div class="col-12 mt-5 alert alert-success">
            {{session('success')}}
         </div>
            
        @endif
            <x-tickets-card
                :id="$id"
                :name="$ticket['name']"
                :date="$ticket['created_at']"
                :content="$ticket['status']"
                :descrizione="$ticket['description']"
            >
    
    
    
            </x-tickets-card>    
    </div>
    <form action="{{route('send.email')}}" method="post">
        @csrf 
        <input name="id" id="hidden" type="hidden" value="{{$id}}">
        <label for="answer">Risposta</label>
        <textarea name="answer" id="answer" cols="6" rows="10"></textarea>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
