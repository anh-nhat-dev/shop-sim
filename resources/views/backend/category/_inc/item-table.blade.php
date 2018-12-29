<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->name}}</td>
    <td>{{$category->created_at}}</td>
    <td>
        <a href="{{route('admin.the-loai-sim.edit', ['id' => $category->id])}}" class="btn btn-info "><i class="icon-pencil"></i>
        </a>
        <form method="POST" class="d-inline" action="{{route('admin.the-loai-sim.destroy', ['id' => $category->id])}}">
            <input type="hidden" value="DELETE" name="_method">
            @csrf
            <button class="btn btn-danger"><i class="icon-trash"></i>
            </button>
        </form>

    </td>
</tr>
