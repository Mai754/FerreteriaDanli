@if ($item["submenu"] == [])
    <li>
        <a href="{{url($item['url'])}}">
            <i class="{{$item["icono"]}}"></i>
            <span class="link_name">{{$item["nombre"]}}</span>
        </a>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="{{url($item['url'])}}">{{$item["nombre"]}}</a></li>
        </ul>
    </li>
@else
    <li>
        <div class="iocn-link">
        <a href="javascript:;">
            <i class='{{$item["icono"]}}'></i>
            <span class="link_name">{{$item["nombre"]}}</span>
        </a>
            <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
            <li>
                <a class="link_name" href="javascript:;">{{$item["nombre"]}}</a>
            </li>
            @foreach ($item["submenu"] as $submenu)
                @include("theme.sidebar.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif