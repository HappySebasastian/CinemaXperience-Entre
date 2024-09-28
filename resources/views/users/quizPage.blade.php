@extends('layouts.master')

@section('title', 'Quiz Page')

@section('css')
@endsection

@section('content')
<div class="bg-neutral-800 rounded-xl m-16 border-4 border-yellow-400 w-2/3 mx-auto">
    <div class="bg-black-600 flex flex-col justify-center pt-4 h-3/5 py-20">
        <h1 class="ml-14 text-yellow-400 text-4xl font-bold mb-6">{{$quiz->title}}</h1>

        <!-- Loop through each question -->
        @foreach($questions as $question)


            <!-- Quiz Container for each question -->
            <div class="bg-stone-700 rounded-lg p-6 border-4 border-yellow-400 w-4/5 mb-16 mx-auto h-3/5">
                <h1 class="text-yellow-400 text-2xl font-bold mb-6">{{ $loop->iteration }}. {{ $question->question_text }}</h1>
                <!-- Loop through each answer for the current question -->
                <div class="space-y-4">
                    @foreach($question->answer as $answer)
                        <div class="border-2 bg-neutral-500 border-yellow-400 rounded-lg p-3 cursor-pointer">
                            <label class="text-yellow-400">
                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}" class="mr-2">
                                {{ $answer->answer_text }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
