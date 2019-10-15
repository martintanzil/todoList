<h1>Edit To do </h1>

<form action="{{route('updateTodo',['id'=>$todo->id])}}" method="POST">
    @csrf

    <div>
        <label>Deskripsi :</label>
        <input type="text" name="desc" id="desc" value="{{$todo->description}}">
    </div>
    <div>
        <label>Status :</label>
        <input type="hidden" name="status" value=0>
        @if ($todo->status == 1)
        <input type="checkbox" value="1" name="status" class="tab" checked>Done<br><br>
        @else
        <input type="checkbox" value="1" name="status" class="tab">Done<br><br>
        @endif
    </div>

    <input type="submit" value="Confirm">

</form>