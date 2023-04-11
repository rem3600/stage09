@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <div class="analytics-container">
                <h1>Evaluatie {{$course->name}}</h1>
                {{--  iterate over the array and display the data --}}
                {{$student}}
                <h2>Student: {{$student->name}} {{$student->first_name}} </h2>
                <div style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#000; text-align:left;">

                <form action="{{route('evaluations.store')}}" method="POST">
                @csrf
               
                <h3>Softskills (10 punten)</h3>
                @foreach($course->softskill as $key => $value)
                    <div>{{$key}} : {{$value->name}} 
                    <input class="form-control" type="number" name="softskill[{{$value->id}}]" value="">
                    </div>
                @endforeach

                <h3>Hardskills (10 punten)</h3>
                @foreach($course->hardskill as $key => $value)
                    <div>{{$key}} : {{$value->name}} 
                    <input class="form-control" type="number" name="hardskill[{{$value->id}}]" value="">
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
           

            <div class="Dashboard Dashboard--full" id="analytics-dashboard">
                <header class="Dashboard-header">
                    <ul class="FlexGrid">
                        <li class="FlexGrid-item">
                            <div class="Titles">
                                <h1 class="Titles-main" id="view-name">{{ __('voyager::analytics.select_view') }}</h1>
                                <div class="Titles-sub">{{ __('voyager::analytics.various_visualizations') }}</div>
                            </div>
                        </li>
                        <li class="FlexGrid-item FlexGrid-item--fixed">
                            <div id="active-users-container"></div>
                        </li>
                    </ul>
                    <div id="view-selector-container"></div>
                </header>

               
            </div>
        </div>
    </div>
@stop


