@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Data Item</div>

            <div class="card-body">
                <form method="post" action="{{ route('data-items.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="type_id" value="0" />

                    <span>Rating</span>
                    <div class="form-group">
                        <div class="star-container">
                            <input type="radio" id="radio-star-5" name="json_data[rating]" class="star-radio" value="5" />
                            <label for="radio-star-5" class="star-label"></label>
                            <input type="radio" id="radio-star-4" name="json_data[rating]" class="star-radio" value="4" />
                            <label for="radio-star-4" class="star-label"></label>
                            <input type="radio" id="radio-star-3" name="json_data[rating]" class="star-radio" value="3" />
                            <label for="radio-star-3" class="star-label"></label>
                            <input type="radio" id="radio-star-2" name="json_data[rating]" class="star-radio" value="2" />
                            <label for="radio-star-2" class="star-label"></label>
                            <input type="radio" id="radio-star-1" name="json_data[rating]" class="star-radio" value="1" />
                            <label for="radio-star-1" class="star-label"></label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-success">
                        <i class="fa fa-plus"></i>
                    </button>
                </form>
                <hr />

                <ul>
                    @foreach(auth()->user()->dataItems as $dataItem)
                    <li>
                        <span>{{ $dataItem->json_data['rating'] }}</span>
                        <span> - </span>
                        <span>{{ \Carbon\Carbon::parse($dataItem->created_at) }}</span>
                        <form method="post" action="/data-items/{{ $dataItem->id }}" style="display:inline-block;">
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        </form>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>

        {{--
    @foreach(auth()->user()->dataItems as $dataItem)
    <div></div>
    @endforeach
    --}}
@endsection