@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{route('contact.store')}}">
                    @csrf
                    
                    <div class="form-group row">
                      <label for="inputText" class="col-md-3 col-form-label text-md-right">氏名</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="your_name">
                      </div>
                    </div>
                    <br>
                    
                    <div class="form-group row">
                      <label for="inputText" class="col-md-3 col-form-label text-md-right">件名</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="title">
                      </div>
                    </div>
                    <br>

                    <div class="form-group row">
                      <label for="inputEmail" class="col-md-3 col-form-label text-md-right">メールアドレス</label>
                      <div class="col-md-9">
                        <input type="email" class="form-control" name="email">
                      </div>
                    </div>
                    <br>

                    <div class="form-group row">
                      <label for="inputText" class="col-md-3 col-form-label text-md-right">ホームページ</label>
                      <div class="col-md-9">
                        <input type="url" class="form-control" name="url">
                      </div>
                    </div>
                    <br>
                    

                    <div class="form-group row">
                      <label for="exampleInputEmail1" class="col-md-3 col-form-label text-md-right">性別</label>
                      <div class="col-md-9">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input text-md-center" type="radio" name="gender" value="0">男性</input>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" value="1">女性</input>
                        </div>
                      </div>
                    </div>
                    <br>

                    <div class="form-group row">
                      <label for="ageSelect" class="col-md-3 col-form-label text-md-right">年齢</label>
                      <div class="col-md-9">
                        <select class="form-control" name="age">
                          <option value="">選択して下さい</option>
                          <option value="1">〜19歳</option>
                          <option value="2">20歳〜29歳</option>
                          <option value="3">30歳〜39歳</option>
                          <option value="4">40歳〜49歳</option>
                          <option value="5">50歳〜59歳</option>
                          <option value="6">60歳〜</option>
                        </select>
                      </div>
                    </div>
                    <br>

                    <div class="form-group">
                      <label for="inputTextarea" class="col-md-3 col-form-label text-md-right">お問い合わせ内容</label>
                      <textarea class="form-control" name="contact"></textarea>
                    </div>
                    <br>

                    <div class="form-group row">
                      <label for="col-md-3 col-form-label text-md-right">注意事項に同意する</label>
                      <div class="col-md-9">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" name="caution" value="1">
                        </div>
                      </div>
                    </div>   
                    <br>

                    <div class="form-group row">
                      <div class="col-md-10">
                        <input class="btn btn-info" type="submit" value="登録する"> 
                      </div>
                    </div>
                    <br>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection