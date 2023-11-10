@extends('/layout/nav')
@section('contenue')
<div class="container">
    <div class="row mt-5">
        @foreach ($articles as $article)
        <ul class="list-group mt-1">
            <li class="list-group-item d-flex justify-content-between align-items-center ">
                {{$article->nomArticle}}
                <br>
                {{$article->contenueArticle}}
            </li>
        </ul>
        @endforeach
    </div>
</div>
@endsection()