<h1>Edit To do </h1>

<form action="{{route('updateTodo',['id'=>$todo->id])}}" method = "POST">
@csrf
    Deskripsi : <input type = "text" name ="desc" id ="desc" value ="{{$todo->description}}">
    Status : 
    <input type="hidden" name="status" value = 0>
    @if($todo -> status == 1)
        <input type="checkbox" value ="1" name = "status" class="tab" checked>Done<br><br>
    @else
        <input type="checkbox" value ="1" name = "status"class="tab">Done<br><br>
    @endif

    <input type="submit" value="Confirm">

</form>