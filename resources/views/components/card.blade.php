


        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$titolo}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$categoria}}</h6>
                <p class="card-text">{{$descrizione}}</p>
                <a href="{{route('articoli.dettaglio', ['id'=>$chiave])}}" class="card-link">Card link</a>
            </div>
        </div>
