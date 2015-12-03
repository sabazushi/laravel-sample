{!! Form::open(array('url' => '/sample/hoge/create')) !!}
    <div>
        文字
        {!! Form::text('body') !!}
    </div>

    <div>
        {!! Form::submit('作成', ['name'=>'submit']) !!}
    </div
{!! Form::close() !!}
