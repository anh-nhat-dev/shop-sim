<tr>
    <td>{{$network->id}}</td>
    <td>{{$network->name}}</td>
    <td><img src="{{asset($network->thumbnail)}}" width="50" alt=""></td>
    <td>{{$network->created_at}}</td>
    <td>
        <a href="{{route('admin.nha-mang.edit', ['id' => $network->id])}}" class="btn btn-info "><i class="icon-pencil"></i>
        </a>
        <form method="POST" class="d-inline" action="{{route('admin.nha-mang.destroy', ['id' => $network->id])}}">
            <input type="hidden" value="DELETE" name="_method">
            @csrf
            <button class="btn btn-danger"><i class="icon-trash"></i>
            </button>
        </form>

    </td>
</tr>
