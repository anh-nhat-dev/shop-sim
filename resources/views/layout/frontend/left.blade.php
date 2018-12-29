<div class="col-md-pull-6 col-md-3 sidebar">
    <div class="box">
        <h4 class="header">SIM THEO MẠNG</h4>
        <div class="box-content box-menu-sidebar">
            <ul class="list">
                @foreach ($networks as $network)
            <li class=" "><a href="{{route('sim.network', $network->slug)}}">Sim <b>{{$network->name}}</b></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="box">
        <h4 class="header">SIM THEO LOẠI</h4>
        <div class="box-content box-menu-sidebar">
            <ul class="list">
                @foreach ($categories as $category)
                    <li class=""><a href="{{route('sim.category', $category->slug)}}"><b>{{$category->name}}</b></a></li>
                @endforeach
            </ul>
        </div>
    </div>
  </div>