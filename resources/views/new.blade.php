@extends('layout')

@section('content')
<h3>お店投稿</h3><br>
@if($errors->any())
 <div class="error">
   <ul class="text-danger">
     @foreach($errors->all() as $message)
       <li>{{ $message }}</li>
     @endforeach
   </ul>
 </div>
@endif
   {{ Form::open(['method' =>'post', 'url' => '/shop', 'files' => true]) }}
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
            {!! Form::mySelectBox('category_id', $categories, '選択してくだい', [], ['選択してくだい' => 'disabled']) !!}
        </div>
        <div class="form-group">
            {{ Form::label('subcategory_id','サブカテゴリ') }}
            {{ Form::select('subcategory_id', $subcategories, '選択してください') }}
        </div>
        <div class="form-group">
            {{ Form::file('image', null) }}
        </div>
        <div class="form-grop">
            {{ Form::label('reivew', 'レビュー' ) }}<br>
            {{ Form::textarea('review', null) }}
        </div>
              <div class="form-submit">
                <button type="submit">投稿する</button>
              </div>
          </div>
   </form>
   {{ Form::close() }}
   <br>
    <div>
       <a href="{{ route('shop.list') }}">一覧に戻る</a>
   </div>
@endsection
