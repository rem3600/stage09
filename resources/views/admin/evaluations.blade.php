@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <div class="analytics-container">
         
                <div style="border-radius:4px; padding:20px; background:#fff; margin:0; color:#000; text-align:left;">
             
                <h1>Evaluatie alle cursisten</h1>
            
                {{-- iterate $students and display the data with a foreach loop
                also display the course name and a button that links to the evaluation page for that student --}}

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Voornaam</th>
                            <th>Cursus</th>
                            <th>Actie</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->first_name}}</td>
                            @if($student->course)
                                <td>{{$student->course}}</td>
                                <td><a href="{{route('evaluations.show', $student->id)}}" class="btn btn-primary">Evalueer</a></td>
                            @else
                                <td>No active courses</td>
                                <td></td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>

               
            
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


