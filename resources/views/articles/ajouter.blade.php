@extends('/layout/nav')
@section('contenue')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="#">
                    @csrf
                    <fieldset>
                        <legend>Category</legend>
                        <select name="categorie_id" id="">
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nomCategorie}}</option>
                        @endforeach
                    </select>
                        <div class="form-group row">

                            <div class="form-group">
                                <label for="exampleInputArticle" class="form-label mt-4 ">Nom Article</label>
                                <input name="nomArticle" type="text" class="form-control" id="exampleInputArticle"
                                    aria-describedby="articlelHelp" placeholder="Entrez Article">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputArticle" class="form-label mt-4 ">Contenue Article</label>
                                <textarea name="contenueArticle" id="exampleInputArticle" class="form-control" cols="30" rows="6"
                                    aria-describedby="articlelHelp" placeholder="Entrez Article"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Enregistrer</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection()
