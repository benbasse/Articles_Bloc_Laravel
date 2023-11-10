@extends('/layout/nav')
@section('contenue')
    <div class="container">
        <div class="row mt-5 my-4">
            @foreach ($articles as $article)
                <div class="col-md-3 mt-4 my-4">
                    <div class = "card border-primary m-6" style="max-width: 25rem;">
                        <h6 class="card-title" style="text-align: center"><b>{{ $article->nomArticle }}</b></h6>

                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="201%" height="170"
                        aria-label="Placeholder: Image cap" focusable="false" role="img"
                        preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180"
                        style="font-size:10px; text-anchor:middle">
                        <rect width="50%" height="100%" fill="#868e96"></rect>
                        <text x="15%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <p class="card-text"><b>{{ $article->contenueArticle }}</b></p>
                    </div>
                    <div class="card-body">
                        <a href="{{'/articles/more/'. $article->id}}" class="card-link">
                            <button type="submit" class="btn btn-primary mt-4 ">More </button>
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $article->created_at }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection()
