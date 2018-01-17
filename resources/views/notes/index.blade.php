<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> Notes </title>
 </head>
 <body>
    <h1> Notes</h1>
     
     <table border=1>
        <tr>
            <th>Title</th>
            <th>Content</th>
         </tr>
     @foreach($notes as $note)
         <tr>
            <td data-note="{{$note->id}}">
                {{$note->title}}
            </td>
            <td>
                {{$note->content}}
            </td>
             <td><a href="{{route('note.verEliminar',['id'=>$note->id])}}">Delete</a></td>
             <td><a href="{{route('notes.show', $note->id)}}">Update</a></td>
         </tr>
     @endforeach
         <tr>
            <td><a href="{{url('createNote')}}">Create</a></td>
         </tr>
        </table>
 </body>
</html>