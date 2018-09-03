@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-lg-8">
                <div class="card">
                    <div class="card-header">Add New</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('data-items.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="type_id" value="{{ $dataItemType->id }}" />

                            <div class="form-group">
                                <label for="json_data[task_description]">Task Description</label>
                                <textarea class="form-control" name="json_data[task_description]" id="task_description" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-success">
                                <i class="fa fa-plus"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-lg-8">
                <hr />
            </div>

            <div class="col-xs-12 col-lg-8">
                <div class="card">
                    <div class="card-header">List</div>
                    <div class="card-body">
                        @if($dataItems)
                        @foreach($dataItems as $dataItem)
                            <div class="task-entry-container">
                                <div class="task-description">
                                    {{ $dataItem->json_data['task_description'] }}
                                </div>
                                <div class="task-timestamp">
                                    <span style="line-height:40px;">{{ \Carbon\Carbon::parse($dataItem->created_at)->toDayDateTimeString() }}</span>
                                </div>
                                <div class="task-delete-form">
                                    <form method="post" action="/data-items/{{ $dataItem->id }}" style="display:inline-block;">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script type="text/javascript">

    </script>
@endsection