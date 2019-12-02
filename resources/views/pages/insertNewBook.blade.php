@extends('layout.mytemplate')
@section('title', 'insert new book')

@section('content')
<form class="container" method="POST">
        @csrf
    <input type="text" name="title" placeholder="book title"><br>
    <input type="text" name="category" placeholder="book category"><br>
    <select name="language">
        <option value="english">english</option>
        <option value="arabic">arabic</option>
        <option value="french">french</option>
        <option value="german">german</option>
    </select><br>
    <input type="text" name="year" placeholder="book release year"><br>
    <input type="number" name="authorID" placeholder="author ID"><br>
    <input type="submit" name="submit" value="add">
   
</form>

<script>


</script>
    
@endsection
    
