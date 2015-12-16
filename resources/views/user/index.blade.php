@extends('dash')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <h1>List All Users
                            <a class="btn btn-default pull-right" href="{!! route('dash.user.create') !!}">New Page</a>
                        </h1>

                        <!-- data-height="343" -->
                        <table id="table" data-toggle="table"
                            data-url="http://localhost:8000/dash/page"
                            data-show-columns="true"
                            data-id-field="id"
                            data-pagination="true"
                            data-page-size="5"
                            data-page-list="[5,10,15,50,100]"
                            data-pagination-first-text="<i class='glyphicon glyphicon-fast-backward'></i>"
                            data-pagination-pre-text="<i class='glyphicon glyphicon-chevron-left'></i>"
                            data-pagination-next-text="<i class='glyphicon glyphicon-chevron-right'></i>"
                            data-pagination-last-text="<i class='glyphicon glyphicon-fast-forward'>">
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
    </div>
</div>

@endsection