@extends('layout.nav')
@section('contenue')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="#">
                    @csrf
                    <fieldset>
                        <legend>Article: <b>{{$articles->nomArticle}}</b></legend>
                        <input type="hidden" value="{{$articles->id}}" name="id">
                        <div class="form-group row ">
                            <div class="form-group mt-4">
                                <label for="exampleInputComment" class="form-label mt-4 ">Content Comment</label>
                                <textarea name="contenueCommentaire" id="exampleInputComment" class="form-control" cols="30" rows="3"
                                    aria-describedby="commentlHelp" placeholder="Put the comment " ></textarea>
                            </div>
                        </div>
                        <a href="#">
                            <button type="submit" class="btn btn-primary mt-4">Save Comment</button>
                        </a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
