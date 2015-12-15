@extends('dash')

@section('title', 'Admin')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="panel">
            <header class="panel-heading">
                Responsive Hover Table
            </header>

            <div class="panel-body">


                    <h1>Basic Columns</h1>
                    <p>Use <code>showColumns</code>, <code>minimumCountColumns</code> options, and <code>visible</code>, <code>switchable</code> column options to show the columns menu list use to switch.</p>

                    <table id="table"
                            data-toggle="table"

                            data-height="460"

                            data-url="http://localhost:8000/dash/page/json"
                            data-show-columns="true"
                            data-id-field="id"


                            data-pagination="true"
                            data-page-size="3"
                            data-page-list="[5,8,10]"
                            data-pagination-first-text="<i class='glyphicon glyphicon-fast-backward'></i>"
                            data-pagination-pre-text="<i class='glyphicon glyphicon-chevron-left'></i>"
                            data-pagination-next-text="<i class='glyphicon glyphicon-chevron-right'></i>"
                            data-pagination-last-text="<i class='glyphicon glyphicon-fast-forward'>"

                            >

                        <thead>
                        <tr>
                            <th data-field="id" data-radio="true"></th>
                            <th data-field="username">Username</th>
                            <th data-field="firstname">First name</th>
                            <th data-field="lastname">Last name</th>
                            <th data-field="type">Type</th>
                            <th data-field="email">E-mail</th>
                            <th data-field="phone">Phone</th>
                            <th data-field="create_at">Create At</th>
                            <th data-field="update_at">Update At</th>
                        </tr>
                        </thead>
                    </table>


            </div>

        </div>
    </div>
</div>

@stop

@push('scripts')
<script type="text/javascript">

</script>
@endpush