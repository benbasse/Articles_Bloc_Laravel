@extends('/layout/nav')
@section('contenue')
    <div class="container">
        <div class="row md-4 my-4">
            {{-- <ul class="list-group mt-1">
                <li class="list-group-item d-flex justify-content-between align-items-center ">
                    {{ $categorie->nomCategorie }}
                    <a href="{{'/articles/'. $categorie->id }}">
                        <button type="submit" class="btn btn-primary mt-4">voir Articles</button>
                    </a>
                </li>
            </ul> --}}
            @foreach ($categories as $categorie)
            <div class="card border-primary m-3" style="max-width: 20rem;">
                <div class="card-body">
                    <div class="card"><b>{{ $categorie->nomCategorie }}</b></div>
                    <a href="{{'/articles/'. $categorie->id }}">
                        <button type="submit" class="btn btn-primary mt-4">voir Articles</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection()
