<tr>
    <td>{{$sim->id}}</td>
    <td>{{$sim->name}}</td>
    <td> <img src="{{asset($sim->thumbnail)}}" width="50" alt=""></td>
    <td>@money($sim->price, 'VND')</td>
    <td>{{$sim->network->name}}</td>
    <td>{{$sim->category->name}}</td>
    <td><span class="label @if ($sim->status == 'selling') label-success @else label-warning @endif label-rounded">
            @if ($sim->status == 'selling') ĐANG BÁN @else ĐÃ BÁN @endif</td>
    <td>{{$sim->created_at}}</td>
    <td>
        <a href="{{route('admin.sims.edit', ['id' => $sim->id])}}" class="btn btn-info "><i class="icon-pencil"></i>
        </a>
        <form method="POST" class="d-inline" action="{{route('admin.sims.destroy', ['id' => $sim->id])}}">
            <input type="hidden" value="DELETE" name="_method">
            @csrf
            <button class="btn btn-danger"><i class="icon-trash"></i>
            </button>
        </form>

    </td>
</tr>
