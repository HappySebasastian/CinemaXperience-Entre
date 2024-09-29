@extends('layouts.master')

@section('title', 'Quiz Page')

@section('css')
    <style>
        .active-answer {
            background-color: #fbbf24 !important; /* Yellow with !important */
            color: #000 !important; /* Black text with !important */
        }


    </style>
@endsection

@section('content')
<div class="bg-neutral-800 rounded-xl m-16 border-4 border-yellow-400 w-2/3 mx-auto">
    <div class="bg-black-600 flex flex-col justify-center pt-4 h-3/5 py-20">
        <h1 class="ml-14 text-yellow-400 text-4xl font-bold mb-6">{{ $quiz->title }}</h1>

        <!-- Loop through each question -->
        @foreach($questions as $question)

            <!-- Quiz Container for each question -->
            <div class="bg-stone-700 rounded-lg p-6 border-4 border-yellow-400 w-4/5 mb-16 mx-auto h-3/5">
                <h1 class="text-yellow-400 text-2xl font-bold mb-6">{{ $loop->iteration }}. {{ $question->question_text }}</h1>

                <!-- Loop through each answer for the current question -->
                <div class="space-y-4">
                    @foreach($question->answers as $answer)
                        <button
                            type="button"
                            class="answer-btn border-2 bg-neutral-500 border-yellow-400 rounded-lg p-3 text-yellow-400 w-full hover:bg-yellow-500 hover:text-black transition-all duration-300"
                            data-answer-id="{{ $answer->id }}"
                        >
                            {{ $answer->answer_text }}
                        </button>
                    @endforeach
                </div>
            </div>
        @endforeach
        <div class="flex justify-end w-4/5 mx-auto">
            <a href="" class="bg-yellow-400 hover:bg-yellow-600 text-black font-bold py-2 px-6 rounded-xl">
                Test Your Luck.. Or Skill
            </a>
        </div>

    </div>
</div>

{{-- Add the script here at the bottom --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.answer-btn');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            // Log the clicked button for debugging purposes
            console.log("Button clicked: ", this);

            // Get the parent container for answers of the same question
            const parent = this.closest('.space-y-4');

            // Remove the active class from all buttons in the same question block
            parent.querySelectorAll('.answer-btn').forEach(btn => {
                btn.classList.remove('active-answer');
                btn.style.backgroundColor = '';  // Reset styles
                btn.style.color = '';  // Reset styles
                console.log("Removed active class from: ", btn);
            });

            // Add the active class to the clicked button
            this.classList.add('active-answer');
            this.style.backgroundColor = '#fbbf24';  // Apply styles directly
            this.style.color = '#000';  // Apply styles directly
            console.log("Added active class to: ", this);
        });
    });
});


</script>

@endsection
