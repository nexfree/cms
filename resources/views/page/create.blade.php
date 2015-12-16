@extends('dash')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Page
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'dash.page.store', 'class' => 'form col-md-12']) !!}
                    @include('page.form')
                    <div class="row">
                        <div class="col-md-3 pull-right">
                            {!! link_to_route('dash.page.index', 'Cancel', '', ['class' => 'btn btn-block btn-default']) !!}
                        </div>
                        <div class="col-md-3 pull-right">
                            {!! Form::submit('Save', ['class' => 'btn btn-block btn-info']) !!}
                        </div>
                    </div>
                    <br/>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
{!! Html::script('ckeditor/ckeditor.js') !!}
<script type="text/javascript">
    $(function(){
        $('#txtDescription').ckeditor();
    });
</script>
@endpush