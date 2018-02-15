<div class="wrapper container-fluid00">

    {{--<form method="post" action="{{ route('pagesAdd') }}" class="form-horizontal" enctype="multypart/form-data">--}}
{!! Form::open(['url' => route('pagesAdd'), 'class' => 'form-horizontal', 'method' => 'POST',  'files'=>true ]) !!}
    <form method="post" action="{{ route('pagesAdd') }}" class="form-horizontal" enctype="multypart/form-data">
<div class="form-group">
    {!! Form::label('name', 'Название', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placehoder'=>'Введите название странице'] ) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('alias', 'Псевдоним:',['class'=>'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
        {!! Form::text('alias', old('alias'), ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
        {!! Form::textarea('text', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
    <div class="col-xs-8">
        {!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет",'multiple']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
        {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
    </div>
</div>

{!! Form::close() !!}
    {{--</form>--}}
    <script>
        CKEDITOR.replace('editor');
    </script>
</div>