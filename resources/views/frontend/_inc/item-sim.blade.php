<tr>
    <td class="hidden-xs" style="width:20px;">
        {{$sim->id}}
    </td>
    <td class="sim">
    <a href="{{route('detail', $sim->slug)}}">{{$sim->name}}</a>
    </td>
    <td class="price text-center">@money($sim->price, 'VND')</td>
    <td class="loai-mang">
        <img src="{{asset($sim->network->thumbnail)}}" width="50" alt="{{$sim->number}}">
    </td>
    <td class="hidden-xs type">
        {{$sim->category->name}}
    </td>
    <td class="order">
        <a href="{{route('detail', $sim->slug)}}">Đặt mua</a>
    </td>
</tr>