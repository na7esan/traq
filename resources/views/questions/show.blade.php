@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <span>更新日：{{ $question->updated_at->format('Y年m月d日 H:i') }}</span>
            <h1 class="h5 mb-4 border-bottom">
                {{ $question->title }}
            </h1>


            <p class="mb-5">
                {!! nl2br(e($question->content)) !!}
            </p>


<!--これがテストイシューです-->

        </div>
    </div>

@endsection