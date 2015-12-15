@extends('dash')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="panel">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <h1>List ALl Pages
                            <a class="btn btn-default pull-right" href="{!! route('dash.page.create') !!}">New Page</a>
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
                                    <th data-field="id" data-checkbox="true"></th>
                                    <th data-field="title">Title</th>
                                    <th data-field="slug">Slug</th>
                                    <th data-field="image" data-visible="false">Image</th>
                                    <th data-field="author" data-switchable="false">Author</th>
                                    <th data-field="click_count" data-visible="false">Visitor</th>
                                    <th data-field="created_at">Create At</th>
                                    <th data-field="updated_at">Update At</th>
                                    <th data-field="deleted_at">Delete At</th>
                                    <th data-field="published_at">Publish At</th>
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