@extends('layouts.master')

@section('head')
  @parent
  <script>
    window.lrs = {
      key: '{{ $lrs->api['basic_key']}}',
      secret: '{{ $lrs->api['basic_secret'] }}'
    };
  </script>
  {{ HTML::style('assets/css/exports.css')}}
  {{ HTML::style('assets/css/typeahead.css')}}
@stop

@section('sidebar')
  @include('partials.lrs.sidebars.lrs')
@stop

@section('content')

  <div class="page-header">
    <h1>{{ Lang::get('statements.exporting') }}</h1>
  </div>

  <div id="content"></div>

  <script data-main="{{ URL() }}/assets/js/exports/config" src="{{ URL() }}/assets/js/libs/require/require.js"></script>
@stop
