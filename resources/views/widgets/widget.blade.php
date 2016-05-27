@extends(isset($layout) && !empty($layout) ? $layout : 'layouts.dashboard.one-column')

@section('widget')
  <div class="panel panel-default">
    @if (isset($widget['title']) && !empty($widget['title']))
      <div class="panel-heading">{{ $widget['title'] }}</div>
    @endif

    <div class="panel-body">
      @yield('widget-content')
    </div>
  </div>
@overwrite
