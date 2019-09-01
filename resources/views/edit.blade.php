@extends('layout')

@section('content')
   <h3>「{{ $shop->name }}」の編集</h3><br>
   @if($errors->any())
 <div class="error">
   <ul class="text-danger">
     @foreach($errors->all() as $message)
       <li>{{ $message }}</li>
     @endforeach
   </ul>
 </div>
@endif
   {{ Form::model($shop, ['route' => ['shop.update', $shop->id], 'files' => true]) }}
        <div class="form-group">
            {{ Form::label('name', '店名') }}
            {{ Form::text('name', null) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', '住所') }}
            {{ Form::text('address', null) }}
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'カテゴリ') }}
            {{ Form::select('category_id', $categories) }}
        </div>
        <div class="form-group">
            {{ Form::label('subcategoriy_id','サブカテゴリ') }}
            {{ Form::select('subcategory_id', $subcategories) }}
        </div>
        <div class="form-group">
            {{ Form::file('image', null) }}
        </div>
        <div class="form-group">
            {{ Form::label('review', 'レビュー') }}
            {{ Form::textarea('review', null) }}
        </div>
        <div class="form-group">
            {{ Form::submit('更新する', ['class' => 'btn btn-secondary']) }}
        </div>
   </form>
   {{ Form::close() }}
    <br>
    <div>
       <a href="{{ route('shop.list') }}">一覧に戻る</a>
   </div>
@endsection
