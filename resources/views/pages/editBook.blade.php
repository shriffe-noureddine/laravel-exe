@extends('layout.mytemplate')

@section('title', 'edit')
@section('content')
<form class="container" method="POST">
    @csrf
<input type="text" name="title" placeholder="new title"><br>
<input type="text" name="category" placeholder="new category"><br>
<select name="language">
    <option value="english">english</option>
    <option value="arabic">arabic</option>
    <option value="french">french</option>
    <option value="german">german</option>
</select><br>
<input type="text" name="year" placeholder="new release year"><br>
<input type="number" name="author_id" placeholder="new author ID"><br>
<input type="submit" name="submit" value="edit">

</form>
@endsection
    
