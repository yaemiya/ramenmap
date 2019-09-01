@extends('layout')
@section('content')
@auth
<div class="text-right">
    <a href={{ route('shop.new') }} class='btn btn-outline-info'>お店投稿</a>
</div>
@endauth
<h4>お店一覧</h4><br>
@foreach ($shops as $shop)
<div class="card mb-3" style="width: 540;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ asset('storage/image/'.$shop->image) }}" class="card-img">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title">
                    <a href="{{ route('shop.detail', ['id' => $shop->id]) }}">{{ $shop->name }}</a>
                </h5>
                <p class="card-text">
                    <small class='text-muted'>カテゴリ:
                    <a href="{{ route('shop.list', ['category_id' => $shop->category_id])}}">
                        {{ $shop->category->name }}
                    </a>
                    | <a href="{{ route('shop.list', ['subcategory_id' => $shop->subcategory_id])}}">
                        {{ $shop->subcategory->name }}
                    </a>
                    </small></p>
                <p class="card-text">住所: {{ $shop->address }}</p>
                <p>{{ $shop->review }}</p>
                <p class="card-text"><small class="text-muted">
                    by <a href="{{  route('users.show', $shop->user_id) }}">{{ $shop->user->name }}</a>
                    　　　投稿日時: {{ $shop->created_at }}</small></p>
            </div>
        </div>
    </div>
</div>
@endforeach
{{ $shops->links() }}
@endsection
