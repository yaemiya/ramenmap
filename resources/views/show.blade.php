@extends('layout')

@section('content')
<h2>{{ $shop->name }}</h2>
<div>
    <p> <small class='text-muted'>　カテゴリ:
            {{ $shop->category->name }}
            @if ($shop->category->name != $shop->subcategory->name)
            / {{ $shop->subcategory->name }}
            @endif
        </small></p>
    <div class="card mb-3" style="width: 540;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <p><img src="{{ asset('storage/image/'.$shop->image) }}" class="img-fluid w-100"></p>
            </div>
            <p class="card-text">{{ $shop->review }}<br>
            <small class="text-muted">
                    by <a href="{{  route('users.show', $shop->user_id) }}">{{ $shop->user->name }}</a>
                </small></p>

            <p>{{ $shop->address }}</p>
            <iframe id='map'
                src='https://google.com/maps/embed/v1/place?key=AIzaSyA_8Q7Az3gpMUFDXQD20YP3yK82VxSvMGY&q={{ $shop->address }}'
                width='100%' height='320' frameborder='0'>
            </iframe>

        </div>
    </div>
</div>
<div>
    <br><a href="{{ route('shop.list') }}">一覧に戻る</a>
    @auth
    @if ($shop->user_id === $login_user_id)
    |
    <a href="{{ route('shop.edit', ['id' => $shop->id]) }}">編集</a>
    <p></p>
    {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
    {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
    {{ Form::close() }}
    @endif
    @endauth

</div>
@endsection
