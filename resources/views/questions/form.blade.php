<div class="row">
    <div class="col-6">
        {!! Form::model($question, ['route' => 'questions.store']) !!}
            <div class="form-group">
                {!! Form::label('title', 'タイトル:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', '内容:') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', '状態:') !!}
                {!! Form::select('status', ['未解決' => '未解決', '解決済' => '解決済', '迷宮入' => '迷宮入'], ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>