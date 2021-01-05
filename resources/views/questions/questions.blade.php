@if (count($questions) > 0)
    <ul class="list-unstyled">
        @foreach ($questions as $question)
            <li class="media">
                {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src=#>
                <div class="media-body">
                    <div>
                        {{ $question->title }}
                    </div>
                    <div>
                        {{-- 質問詳細ページへのリンク --}}
                        <p>{!! link_to_route('questions.show', '質問内容を見る, ['question' => $quesiton->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $questions->links() }}
@endif