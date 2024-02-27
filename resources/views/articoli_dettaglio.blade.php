<x-layout>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$articoli['title']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$articoli['category']}}</h6>
                    <p class="card-text">{{$articoli['description']}}</p>
                    <a href="{{route('articoli')}}" class="btn btn-primary">Ritorna ai prodotti</a>
                </div>
            </div>
        </div>
        

    

</x-layout>


