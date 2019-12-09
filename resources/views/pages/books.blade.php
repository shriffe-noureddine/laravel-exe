@extends('layout.mytemplate')

@section('title', 'book list')


@section('content')
    <h1 class="container">this is book list page!</h1>
    @if(count($books) > 0)
    <table  class="table">
        <tr>
            <th>title</th>
            <th>author name</th>
            <th>category</th>
            <th>language</th>
            <th>release_year</th>
        </tr>
        @foreach($books as $book)
        <tr> 
            <td>
                {{$book->title}}
            </td>
            <td>
                {{$book->first_name}} {{$book->last_name}}
            </td>
            <td>
                {{$book->category}}
            </td>
            <td>
                {{$book->language}}
            </td>
            <td>
                {{$book->release_year}}
            </td>
            <td>
                <input type="submit" name="edit" value="edit" id="editButton">
            </td>
            <td>
                <input type="submit" name="delete" value="delete" id="deleteButton">
            </td>

        </tr>
        @endforeach
    </table>
    @endif
@endsection