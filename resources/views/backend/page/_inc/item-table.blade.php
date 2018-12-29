<tr>
        <td>{{$page->id}}</td>
        <td>{{$page->name}}</td>
        <td>{{$page->created_at}}</td>
        <td>
            <a href="{{route('admin.pages.edit', ['id' => $page->id])}}" class="btn btn-info "><i class="icon-pencil"></i>
            </a>
            <form method="POST" class="d-inline" action="{{route('admin.pages.destroy', ['id' => $page->id])}}">
                <input type="hidden" value="DELETE" name="_method">
                @csrf
                <button class="btn btn-danger"><i class="icon-trash"></i>
                </button>
            </form>
        </td>
    </tr>
    