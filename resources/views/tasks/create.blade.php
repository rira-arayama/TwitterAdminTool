@extends('layouts.base')
@section('title')TwitterAdmin | Task作成@endsection
@section('content')
<div class="row mt-5">
    <div class="col">
        <h3>Task Create</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col d-xl-flex justify-content-xl-center align-items-xl-center">
                        <form>
                            <div class="form-group d-xl-flex justify-content-xl-center align-items-xl-center"><label
                                    for="keyword">Keyword</label><input class="form-control ml-2" type="text"
                                    id="keyword"></div>
                            <div class="form-group d-xl-flex justify-content-xl-center align-items-xl-center">
                                <div class="form-check"><input class="form-check-input" type="radio"
                                        id="formCheck-1"><label class="form-check-label"
                                        for="formCheck-1">Follow</label></div>
                                <div class="form-check ml-2"><input class="form-check-input" type="radio"
                                        id="formCheck-1"><label class="form-check-label"
                                        for="formCheck-1">Favorite</label></div>
                                <div class="form-check ml-2"><input class="form-check-input" type="radio"
                                        id="formCheck-1"><label class="form-check-label"
                                        for="formCheck-1">Retweet</label></div>
                                <div class="form-check ml-2"><input class="form-check-input" type="radio"
                                        id="formCheck-1"><label class="form-check-label"
                                        for="formCheck-1">UnFollow</label></div>
                            </div>
                            <div class="form-group d-xl-flex justify-content-xl-center align-items-xl-center"><label
                                    class="text-nowrap" for="keyword">時刻</label><input class="form-control ml-2"
                                    type="text"><span>~</span><input class="form-control" type="text"></div>
                            <div class="form-group d-xl-flex justify-content-xl-center align-items-xl-center"><label
                                    class="text-nowrap" for="keyword">件数</label><input class="form-control ml-2 max-w50"
                                    type="text"><span>件</span></div>
                            <div class="form-group d-xl-flex justify-content-xl-center align-items-xl-center"><label
                                    class="text-nowrap" for="keyword">スリープ</label><input
                                    class="form-control ml-2 max-w50" type="text"><span>秒</span></div>
                            <div class="form-group d-xl-flex justify-content-xl-center"><label class="text-nowrap"
                                    for="keyword">UnFollow条件</label>
                                <div class="form-check ml-2"><input class="form-check-input" type="radio"
                                        id="formCheck-1"><label class="form-check-label"
                                        for="formCheck-1">Follow</label></div>
                            </div>
                            <div class="form-group d-xl-flex justify-content-xl-center align-items-xl-center"><button
                                    class="btn btn-primary" type="button">Create</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
