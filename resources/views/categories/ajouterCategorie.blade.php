@extends('/layout/nav')
@section('contenue')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form method="post" action="#">
                    @csrf
                    <fieldset>
                        <div class="form-group row">
                            <legend>Add New Category</legend>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategorie" class="form-label mt-4 ">Category</label>
                            <input name="nomCategorie" type="text" class="form-control" id="exampleInputCategorie" aria-describedby="categorielHelp"
                                placeholder="Entrez Categorie">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Enregistrer</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection()
