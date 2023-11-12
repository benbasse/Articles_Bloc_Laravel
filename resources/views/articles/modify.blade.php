@extends('/layout/nav')
@section('contenue')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="#">
                    @csrf
                    <fieldset>
                        <legend>Modify Article </legend>
                        <input type="hidden" value="{{$articles->categorie_id}} " name="categorie_id">
                        <div class="form-group row">

                            <div class="form-group">
                                <label for="exampleInputArticle" class="form-label mt-4 ">Name Article</label>
                                <input name="nomArticle" type="text" class="form-control" id="exampleInputArticle"
                                    aria-describedby="articlelHelp"  value="{{$articles->nomArticle}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputArticle" class="form-label mt-4 ">Content Article</label>
                                
                                <textarea name="contenueArticle" id="exampleInputArticle" class="form-control" cols="30" rows="6"
                                aria-describedby="articlelHelp" >{{$articles->contenueArticle}}</textarea>
                            </div>
                            {{-- <div class="form-group">
                                <input type="file" class="form-label mt-4 ">
                                <input type="text" class="form-label mt-4 ">
                            </div> --}}
                        </div>
                            <button type="submit" class="btn btn-primary mt-4">Save Article</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection()
