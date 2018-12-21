@extends('dashboard.layouts.app')

@php $numStars = 10; @endphp
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

                        <span>Rating</span>
                        <div>
                            <div class="star-container">
                                @for($i = $numStars; $i > 0; $i--)
                                <input type="radio" id="radio-star-{{ $i }}" name="json_data[rating]" class="star-radio" value="{{ $i }}" />
                                <label for="radio-star-{{ $i }}" class="star-label"></label>
                                @endfor
                            </div>
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
                <div class="card-header">Chart</div>
                <div class="card-body">
                    <canvas id="chart-container"></canvas>
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
                    <div>
                        <div class="star-container">
                            @for($i = $numStars; $i > 0; $i--)
                            <input
                                type="radio"
                                id="radio-star-{{ $dataItem->id }}-{{ $i }}"
                                name="rating-{{ $dataItem->id }}"
                                class="star-radio" value="{{ $i }}"
                                {{ intval($dataItem->json_data['rating']) === $i ? 'checked' : '' }}
                                disabled
                            />
                            <label for="radio-star-{{ $dataItem->id }}-{{ $i }}" class="star-label"></label>
                            @endfor
                        </div>
                        <br class="d-sm-none" />
                        <br class="d-sm-none" />
                        <span style="line-height:40px;">{{ \Carbon\Carbon::parse($dataItem->created_at)->toDayDateTimeString() }}</span>
                        <form method="post" action="/data-items/{{ $dataItem->id }}" style="display:inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        </form>
                        <hr class="d-sm-none" />
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
    <script src="{{ asset('js/Chart.min.js') }}"></script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('chart-container').getContext('2d');

            var chart = new Chart(ctx, {
                type: 'line',
                data: getChartData(),
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                max: {{ $numStars }},
                                min: 0,
                                stepSize: 1
                            }
                        }]
                    }
                }
            });
        });

        function getChartData() {
            var dateFormat = "YYYY-MM-DD HH:mm:ss";
            var dataItems = {!! $dataItems !!};
            //var thisYear = (new Date()).getFullYear();

            var chartData = {
                labels: [],
                datasets: [{
                    label: "Ratings",
                    data: [],
                    borderColor: "rgba(35, 115, 204, 1)",
                    backgroundColor: "rgba(35, 115, 204, 0.2)"
                }]
            };

            var data = {};

            if (dataItems) {
                _.forEach(dataItems, function (item) {
                    var date = moment(item['created_at'], dateFormat);
                    var rating = parseInt(item['json_data']['rating']);
                    var label = date.format('MMM Do');

                    if (data.hasOwnProperty(label)) {
                        data[label] = average(data[label], rating);
                    } else {
                        data[label] = rating;
                    }
                });

                _.forEach(data, function (rating, date) {
                    chartData.labels.push(date);
                    chartData.datasets[0].data.push(rating);
                });
            }

            return chartData;
        }

        function average(v1, v2) { return (v1 + v2) / 2; }
    </script>
@endsection