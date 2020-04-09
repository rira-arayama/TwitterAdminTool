@extends('layouts.base')
@section('title')TwitterAdmin | Task一覧@endsection
@section('content')
<div class="row mt-5">
    <div class="col d-flex d-xl-flex justify-content-between">
        <h3>TaskList</h3>
        <a class="btn btn-primary" role="button" href="">Add Task</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="table-responsive-md overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Keyword</th>
                        <th>Type</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Max</th>
                        <th>Sleep (s)</th>
                        <th>Run</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#100DaysOfCode</td>
                        <td>Follow</td>
                        <td>08:00</td>
                        <td>20:00</td>
                        <td>20</td>
                        <td>5</td>
                        <td>Stopped</td>
                        <td><button class="btn btn-success" type="button">Edit</button></td>
                        <td><a class="btn btn-info" role="button" style="color: rgb(255,255,255);">Run</a></td>
                    </tr>
                    <tr>
                        <td>#プロサー</td>
                        <td>Favorite</td>
                        <td>08:00</td>
                        <td>20:00</td>
                        <td>20</td>
                        <td>5</td>
                        <td>Runnning</td>
                        <td><button class="btn btn-success" type="button">Edit</button></td>
                        <td><a class="btn btn-danger" role="button" style="color: rgb(255,255,255);">Stop</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>UnFollow</td>
                        <td>08:00</td>
                        <td>20:00</td>
                        <td>20</td>
                        <td>5</td>
                        <td>Stopped</td>
                        <td><button class="btn btn-success" type="button">Edit</button></td>
                        <td><a class="btn btn-info" role="button" style="color: rgb(255,255,255);">Run</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
