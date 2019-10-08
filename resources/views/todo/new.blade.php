<form method="post" action="{{route('addTodo')}}">
    @csrf
    <h1>add new todo</h1>
    <div>
        <label>Deskripsi :</label>
        <input type="text" name = "deskripsi">
    </div>
    <div>
        <input type="submit" name = "sbmt">
    </div>

</form>