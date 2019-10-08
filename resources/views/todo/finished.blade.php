<html lang="en">
<head>
    <title>todo finished</title>
</head>
<body>
    <table border = 1>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Status</th>
        <th>action</th>
    </tr>
    @foreach($finished as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->status}}</td>
    </tr>
    @endforeach
    </table>

</body>
</html>