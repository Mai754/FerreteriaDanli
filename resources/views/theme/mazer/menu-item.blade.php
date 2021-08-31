@if ($item["submenu"] == [])
    <li class="sidebar-item">
        <a href="{{url($item['url'])}}" class="sidebar-link {{getMenuActivo($item['url'])}}">
            <i class="nav-icon fa {{$item["icono"]}}"></i>
            <p>
                {{$item["nombre"]}}
            </p>
        </a>
    </li>
@else 
    <li class="sidebar-item  has-sub">
        <a href="javascript:;" class="sidebar-link">
            <i class="nav-icon fa {{$item["icono"]}}"></i>
            <p>
                {{$item["nombre"]}}
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="submenu">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.mazer.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif