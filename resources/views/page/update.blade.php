@extends('dash')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Page
            </div>
            <div class="panel-body">
                {!! Form::model($page, ['route' => ['dash.page.update', $page->id], 'method' => 'PATCH', 'class' => 'form col-md-12']) !!}
                    @include('page.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection