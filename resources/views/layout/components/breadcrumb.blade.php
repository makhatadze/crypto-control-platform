<!--Start Page Title-->
<div class="page-title-box">
    <ol class="breadcrumb">
        @foreach(request()->breadcrumbs()->segments() as $key => $segment)
            @if(!isset(request()->breadcrumbs()->segments()[$key+1]))
                <li>
                    <a href="" onclick="return false;">{{is_numeric($segment->name()) ? $segment->name() : $segment->name() }}</a>
                </li>
            @else
                <li>
                    <a href="{{$segment->url()}}">{{is_numeric($segment->name()) ? $segment->name() : $segment->name() }}</a>
                </li>
            @endif
        @endforeach
    </ol>
    <div class="clearfix"></div>
</div>
<!--End Page Title-->