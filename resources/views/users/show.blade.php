@extends('layout')
@section('content')
@auth
<div class="text-right">
    <a href={{ route('shop.new') }} class='btn btn-outline-info'>お店投稿</a>
</div>
@endauth
<h3>{{ $user->name }}の投稿</h3>
@foreach ($user->shops as $shop)
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ asset('storage/image/'.$shop->image) }}" class="card-img">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('shop.detail', ['id' => $shop->id]) }}">{{ $shop->name }}</a>
                </h5>
                <p class="card-text"><small class="text>
                        カテゴリ: {{ $shop->category->name }} / {{ $shop->subcategory->name }}
                </small></p>
                <p class="card-text text-muted">住所: {{ $shop->address }}</p>
                <p>レビュー: <br>{{ $shop->review }}</p>
                <p class="card-text"><small class="text-muted">
                        投稿日時:{{ $shop->created_at }}</small></p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
