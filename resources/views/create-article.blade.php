<x-layout>

  <ul>
    @foreach ($errors->all() as $error)
        <li>{[$error]}</li>
    @endforeach
  </ul>

    <h1>crea il tuo articolo</h1>
    <form action="{{route('article.store')}}" method="POST" >
    @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">titolo</label>
          <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">descrizione</label>
          <input type="text" name="description" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">category</label>
            <input type="text" name="category" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


</x-layout>    
