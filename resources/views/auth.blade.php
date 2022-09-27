@extends('layouts.default')
<style>
  th {
    background-color: #289adc;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #fff;
  }
  td {
    padding: 25px 40px;
    background-color: #eee;
    text-align: center;
  }
</style>
@section('title', 'auth.blade.php')

@section('content')
<p>{{ $text }}</p>
<form action="/auth" method="post">
  <table>
    @csrf
    <tr>
      <th>メール: </th>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <th>パスワード: </th>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="送信"></td>
    </tr>
  </table>
</form>
@endsection