@extends('layouts.app')

@section('content')

<div class="mx-auto" style="max-width:600px;">
    <div class="card">
        <div class="card-header">Add New</div>

        <div class="card-body ">
            <form method="post" action="{{ route('data-items.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="type_id" value="{{ $dataItemType->id }}" />

                <div class="form-group">
                    <label for="json_data[task_description]">Task Description</label>
                    <div class="input-group">
                        <textarea class="form-control" name="json_data[task_description]" id="task_description" rows="2" style="resize:none"></textarea>
                        <button type="submit" class="input-group-addon btn btn-outline-success" style="border-bottom-left-radius: 0;border-top-left-radius: 0;">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr />

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
                        <span>{{ \Carbon\Carbon::parse($dataItem->created_at)->toDayDateTimeString() }}</span>
                    </div>
                    <div class="task-delete-form">
                        <form method="post" action="/data-items/{{ $dataItem->id }}" style="display:inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
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


@endsection

@section('page-script')
    <script type="text/javascript">

    </script>
@endsection