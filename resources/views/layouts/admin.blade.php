<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Панель администратора</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/novosti.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">

        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="add_news">
<form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<h1>Добавление Новости</h1>
    <div>
        <h2>Заголовок новости</h2>
        <input type="text" name="title">
    </div>
    <div>
        <h2>Добавление картинки</h2>
        <input type="file" name="img">
    </div>
    <div>
        <h2>Текст новости</h2>
        <textarea name="text" id="editor1" cols="20" rows="10"></textarea>
        </textarea>
    </div>
    <button type="submit">Довавить</button>
    </form>
</div>

<div class="delet_news">
<h1>Удаление Новостей</h1>
@if($news)
<form action="{{route('admin')}}" method="post">
{{ csrf_field() }}
@foreach($news as $new)
<div class="news_blok">
<h2>{{$new->title}}</h2>
<div>
<img src="{{asset('assets/images/news_img')}}/{{$new->img}}">
<p>{{$new->text}}</p>
</div>
<button name="del" value="{{$new->id}}">Удалить</button>
</div>
@endforeach
</form>
{{$news->links()}}
@endif

</div>
<div class="clear"></div>
<div class="add_tower">
<form action="{{route('tower')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <h1>Добавление Вышек</h1>
    <div>
        <h2>Название</h2>
        <input type="text" name="title">
    </div>
    <div>
        <h2>Добавление Картинки</h2>
        <input type="file" name="img">
    </div>
    <div>
    <h2>Добавление цены</h2>
    <input type="text" name="price">
    </div>
    <div>
    <h2>Наличие</h2>
    <input type="text" name="availability">
    </div>
    <button type="submit">Довавить</button>
    </form>
</div>

<div class="delet_tower">
<h1>Удаление Вышек</h1>
@if($towers)
<form action="{{route('tower')}}" method="post">
{{ csrf_field() }}
@foreach($towers as $tower)
<div class="tower_blok">
<h2>{{$tower->title}}</h2>
<div>
<img src="{{asset('assets/images/tower_img')}}/{{$tower->img}}">
<p>{{$tower->price}}</p>
<p>{{$tower->availability}}</p>
</div>
<button name="del" value="{{$tower->id}}">Удалить</button>
</div>
@endforeach
</form>
{{$news->links()}}
@endif
</div>
<div class="clear"></div>
<div class="add_forestry">
<form action="{{route('lesa')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <h1>Добавление Строительных лесов</h1>
    <div>
        <h2>Название</h2>
        <input type="text" name="title">
    </div>
    <div>
        <h2>Добавление Картинки</h2>
        <input type="file" name="img">
    </div>
    <div>
    <h2>Добавление цены/шт</h2>
    <input type="text" name="price">
    </div>
    <div>
    <h2>Наличие</h2>
    <input type="text" name="availability">
    </div>
    <button type="submit">Довавить</button>
    </form>
</div>
<div class="delet_tower">
<h1>Удаление Строительных лесов</h1>
@if($forestry)
<form action="{{route('lesa')}}" method="post">
{{ csrf_field() }}
@foreach($forestry as $forest)
<div class="tower_blok">
<h2>{{$forest->title}}</h2>
<div>
<img src="{{asset('assets/images/forestry_img')}}/{{$forest->img}}">
<p>{{$forest->price}}</p>
<p>{{$forest->availability}}</p>
</div>
<button name="del" value="{{$forest->id}}">Удалить</button>
</div>
@endforeach
</form>
{{$news->links()}}
@endif
</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"
type="text/javascript" charset="utf-8" ></script>
  <script>
        var editor = CKEDITOR.replace( 'editor1' );
       
</script>
</body>
</html>