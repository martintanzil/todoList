<html lang="en">
<head>
    <title>todo</title>
</head>
<body>
    <table border = 1>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Status</th>
        <th>action</th>
    </tr>
    @foreach($todo as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->status}}</td>
        <td>
            <button onclick = "location.href='{{route('editTodo',['id'=>$item->id])}}';">Edit</button>
            <button onclick = "location.href='{{route('deleteTodo',['id'=>$item->id])}}';">Delete</button>
        </td>
    </tr>
    @endforeach
    </table>

</body>
</html>