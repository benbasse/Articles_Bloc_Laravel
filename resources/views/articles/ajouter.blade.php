@extends('/layout/nav')
@section('contenue')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="#">
                    @csrf
                    <fieldset>
                        <legend>Choose The Category </legend>
                        <select name="categorie_id" id="">
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nomCategorie}}</option>
                        @endforeach
                    </select>
                        <div class="form-group row">

                            <div class="form-group">
                                <label for="exampleInputArticle" class="form-label mt-4 ">Name Article</label>
                                <input name="nomArticle" type="text" class="form-control" id="exampleInputArticle"
                                    aria-describedby="articlelHelp" placeholder="Put the name article">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputArticle" class="form-label mt-4 ">Content Article</label>
                                <textarea name="contenueArticle" id="exampleInputArticle" class="form-control" cols="30" rows="6"
                                    aria-describedby="articlelHelp" placeholder="Put the content"></textarea>
                            </div>
                            {{-- <div class="">
                                <input type="file" class>
                            </div> --}}
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Save Article</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection()
