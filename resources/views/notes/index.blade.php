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
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
         </tr>
     @foreach($notes as $note)
         <tr>
            <td>
                {{$note->id}}
            </td>
            <td>
                {{$note->title}}
            </td>
            <td>
                {{$note->content}}
            </td>
         </tr>
     
         
         
         
         
     @endforeach
         <tr>
            <td><a href>Create</a></td>
            <td><a href>Delete</a></td> 
            <td><a href>Update</a></td>
         </tr>
        </table>
 </body>
</html>