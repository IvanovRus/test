@extends('layouts.app')
@section('content')
<table class="table_post">
<tr><th>Описание</th><th>Дейсивие</th></tr>
<tr><td><div><img src={{ $img or 'er' }}></div><div>{{ $msg or 'Пусто'}}</div></td><td><button>Принять</button><button>Отклонить</button></td></tr>
</table>
@endsection