@extends('layouts.app')

@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
<!-- 

<h1>日記追加画面</h1>
<a href="{{ url('/home') }}">一覧に戻る</a>

<form method="post" action="{{ url('/home') }}">
@csrf
<div>
    <label for=title>タイトル
        <input type="text" name="title" placeholder="日記のタイトルを入力"/>
    </label>
</div>
<div>
    <label for=date>日付</label>
        <input type="text" name="date" id='date' placeholder="0000/00/00"/>
    </label>
</div>
<div>
    <label for=image>画像追加
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </label>
</div>
<div>
    <label for=comment>
        <textarea type="text" name="log" placeholder="内容を入力" rows="5" cols="80"></textarea>
    </label>
</div>

<input type="submit" value="保存">

</form> -->
