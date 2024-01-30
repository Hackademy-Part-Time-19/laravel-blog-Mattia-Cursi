<x-layout>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$articoli['articolo']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$articoli['categoria']}}</h6>
                    <p class="card-text">{{$articoli['descrizione']}}</p>
                    <a href="{{route('articoli')}}" class="btn btn-primary">Ritorna ai prodotti</a>
                </div>
            </div>
        </div>
        

    

</x-layout>


