@php
    $path = 'storage/img/';
@endphp

@foreach ($users as $user)
    <div>
        <p>名前：{{ $user->name }}</p>
        <p>E-mail：{{ $user->email }}</p>
        @foreach ($user->image as $img)
            <div>
                <p>写真名：{{ $img->img_title }}</p>
                <img src="{{ asset('img/' . $img->url) }}" alt="">
            </div>
        @endforeach
    </div>
@endforeach