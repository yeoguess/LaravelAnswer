@extends('template')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Profile</h1>
        <p>
            See what {{ $user->name }} has been up to on LaravelAnswers.
        </p>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <h3>Questions</h3>
                {{-- Display all the questions that this user submitted --}}
                @foreach ($user->questions as $question)
                <div class="card card-default">
                    <div class="card-body">
                    <h4>{{ $question->title }}</h4>
                    <p>
                        {{  $question->description }}
                    </p>
                    </div>
                    <div class="card-footer">
                    <a href="{{ route('questions.show', $question->id) }}" class="btn btn-link">View Question</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h3>Answers</h3>
                {{-- Display all the answers that this user submitted --}}
                @foreach ($user->answers as $answer)
                <div class="card card-default">
                    <div class="card-heading">
                        {{ $answer->question->title }}
                    </div>
                    <div class="card-body">
                        <p>
                            <small>{{ $user->name }}'s answer:</small>
                            {{ $answer->content }}
                        </p>
                        <a href="{{ route('questions.show', $answer->question->id) }}" class="btn btn-sm btn-link">View All Answers for this Question</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection