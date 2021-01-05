@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        
    <h1>質問投稿フォーム</h1>
        @include('questions.form')
    <h1>質問一覧</h1>
        @if (count($questions) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>状態</th>
                        <th>質問タイトル</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->status }}</td>
                        <td>{!! link_to_route('questions.show', $question->title, ['question' => $question->id]) !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            {{-- ページネーションのリンク --}}
            {{ $questions->links() }}
        @endif
    
        @else
            <div class="center jumbotron">
                <div class="text-center">
                    <h1>質問リマインドサービス「traQ」へようこそ</h1>
                    {{-- ユーザ登録ページへのリンク --}}
                    {!! link_to_route('signup.get', '今すぐ新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
            </div>
        @endif
@endsection