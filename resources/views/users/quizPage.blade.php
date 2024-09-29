@extends('layouts.master')

@section('title', 'Quiz Page')

@section('css')
    <style>
        .active-answer {
            background-color: #fbbf24 !important;
            color: #000 !important;
        }


        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
@endsection

@section('content')
<div class="bg-neutral-800 rounded-xl m-16 border-4 border-yellow-400 w-2/3 mx-auto">
    <div class="bg-black-600 flex flex-col justify-center pt-4 h-3/5 py-20">
        <h1 class="ml-14 text-yellow-400 text-4xl font-bold mb-6">{{ $quiz->title }}</h1>


        <form id="quiz-form">
            @csrf

            @foreach($questions as $question)


                <div class="bg-stone-700 rounded-lg p-6 border-4 border-yellow-400 w-4/5 mb-16 mx-auto h-3/5" data-question-id="{{ $question->id }}">
                    <h1 class="text-yellow-400 text-2xl font-bold mb-6">{{ $loop->iteration }}. {{ $question->question_text }}</h1>


                    <div class="space-y-4">
                        @foreach($question->answers as $answer)
                            <button
                                type="button"
                                class="answer-btn border-2 bg-neutral-500 border-yellow-400 rounded-lg p-3 text-yellow-400 w-full hover:bg-yellow-500 hover:text-black transition-all duration-300"
                                data-answer-id="{{ $answer->id }}"
                                data-correct="{{ $answer->is_correct }}"
                            >
                                {{ $answer->answer_text }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <div class="flex justify-end w-4/5 mx-auto">
                <button type="button" id="submit-btn" class="bg-yellow-400 hover:bg-yellow-600 text-black font-bold py-2 px-6 rounded-xl">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Modal --}}
<div id="resultModal" class="modal">
    <div class="modal-content items-center">
        {{-- <span class="close">&times;</span> --}}
        <h2>Quiz Results</h2>
        <p id="correctAnswers"></p>
        <p id="totalPoints"></p>
        <button id="back-btn" class="bg-yellow-400 hover:bg-yellow-600 text-black font-bold py-2 px-6 rounded-xl w-1/4 mb-2">Back</button>
        <a href="{{ route('leaderboard.show') }}" class="bg-yellow-400 hover:bg-yellow-600 text-black font-bold py-2 w-1/4 px-6 rounded-xl">Leaderboard</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

document.getElementById('back-btn').addEventListener('click', function () {
    window.history.back();
});

document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.answer-btn');
    let selectedAnswers = {};


    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const questionId = this.closest('.bg-stone-700').getAttribute('data-question-id');
            const answerId = this.getAttribute('data-answer-id');
            const isCorrect = this.getAttribute('data-correct') === '1';


            const parent = this.closest('.space-y-4');


            parent.querySelectorAll('.answer-btn').forEach(btn => {
                btn.classList.remove('active-answer');
                btn.style.backgroundColor = '';
                btn.style.color = '';
            });


            this.classList.add('active-answer');
            this.style.backgroundColor = '#fbbf24';
            this.style.color = '#000';


            selectedAnswers[questionId] = {
                answerId: answerId,
                isCorrect: isCorrect
            };
        });
    });


    document.getElementById('submit-btn').addEventListener('click', function (e) {
        e.preventDefault();
        let correctCount = 0;
        let totalQuestions = Object.keys(selectedAnswers).length;

        for (let key in selectedAnswers) {
            if (selectedAnswers[key].isCorrect) {
                correctCount++;
            }
        }

        const points = correctCount * 100;

        // Set the result text
        document.getElementById('correctAnswers').textContent = `You got ${correctCount} out of ${totalQuestions} correct!`;
        document.getElementById('totalPoints').textContent = `Total Points: ${points}`;

        // Display the modal
        const modal = document.getElementById('resultModal');
        modal.style.display = 'block';

        // Send points to the server
        $.ajax({
            url: '{{ route("quiz.submitPoints") }}',
            type: 'POST',
            data: {
                points: points,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log('Points updated successfully!');
            },
            error: function() {
                console.log('Error updating points.');
            }
        });
    });

    // document.getElementById('submit-btn').addEventListener('click', function (e) {
    //     e.preventDefault();
    //     let correctCount = 0;
    //     let totalQuestions = Object.keys(selectedAnswers).length;


    //     for (let key in selectedAnswers) {
    //         if (selectedAnswers[key].isCorrect) {
    //             correctCount++;
    //         }
    //     }

    //     const points = correctCount * 100;


    //     document.getElementById('correctAnswers').textContent = `You got ${correctCount} out of ${totalQuestions} correct!`;
    //     document.getElementById('totalPoints').textContent = `Total Points: ${points}`;


    //     const modal = document.getElementById('resultModal');
    //     modal.style.display = 'block';
    // });


    document.querySelector('.close').addEventListener('click', function () {
        document.getElementById('resultModal').style.display = 'none';
    });
    document.getElementById('close-modal-btn').addEventListener('click', function () {
        document.getElementById('resultModal').style.display = 'none';
    });
});
</script>

@endsection
