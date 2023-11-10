@extends('/layout/nav')
@section('contenue')
    <div class="container">
        <div class="row md-4 my-4">
            @foreach ($categories as $categorie)
                <ul class="list-group mt-1">
                    <li class="list-group-item d-flex justify-content-between align-items-center ">
                        {{ $categorie->nomCategorie }}
                        <a href="{{'/articles/'. $categorie->id }}">
                        <button type="submit" class="btn btn-primary mt-4">voir Articles</button>
                    </a>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection()
