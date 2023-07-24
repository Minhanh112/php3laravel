@extends('templates.layout')
@section('content')
<h1>{{$title}}</h1>

<form action="{{route('add_Customer')}}" method="POSt" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Họ Tên"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text " name="phone" placeholder="Số Điện Thoại"><br>
    <input type="date" name="date"><br>
    <input type="text" name="address" placeholder="Quê"> <br>
    <input type="file" name="img" accept="iamge/" class="@error('image)"><br>
    <input type="radio" name="gender" value="0"><label for="">NAm</label><br>
    <input type="radio" name="gender" value="1"><label for="">Nữ</label><br>
    <button type="submit" name="submit_add">Add</button>
</form>
@endsection