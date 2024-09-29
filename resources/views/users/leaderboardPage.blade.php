@extends('layouts.master')

@section('title', 'Leaderboard')

@section('content')
<div class="container mx-auto p-4 text-white">
    <h1 class="text-center text-3xl font-bold mb-6">Leaderboard</h1>

    <div class="flex justify-center mb-4 gap-2">
        <button id="globalBtn" class="btn py-2 px-4 rounded text-white bg-transparent hover:bg-yellow-500 hover:text-black focus:bg-yellow-500 focus:text-black active:bg-yellow-500 active:text-black" onclick="showGlobal()">Global</button>
        <button id="localBtn" class="btn py-2 px-4 rounded text-white bg-transparent hover:bg-yellow-500 hover:text-black focus:bg-yellow-500 focus:text-black active:bg-yellow-500 active:text-black" onclick="showLocal()">Local</button>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-yellow-500 text-black">
                    <th class="px-4 py-2">Rank</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Points</th>
                </tr>
            </thead>
            <tbody id="leaderboardData" class="text-white">

            </tbody>
        </table>
    </div>

    <div class="flex justify-center mt-4 py-1 px-4 rounded bg-yellow-500 hover:bg-yellow-600 text-black w-20">
        <a href="{{ route('user.home') }}" class="btn">Home</a>
    </div>
</div>

<script>
    let globalData = @json($globalUsersArray);
    let localData = @json($localUsersArray);

    function showGlobal() {
        setActiveButton('globalBtn');
        loadLeaderboard(globalData);
    }

    function showLocal() {
        setActiveButton('localBtn');
        loadLeaderboard(localData);
    }

    function setActiveButton(btnId) {
        document.querySelectorAll('.btn').forEach(btn => {
            btn.classList.remove('bg-yellow-500', 'text-black');
            btn.classList.add('bg-transparent', 'text-white');
        });
        document.getElementById(btnId).classList.add('bg-yellow-500', 'text-black');
        document.getElementById(btnId).classList.remove('bg-transparent', 'text-white');
    }

    function loadLeaderboard(data) {
        console.log('Data received:', data);

        const tableBody = document.getElementById('leaderboardData');
        tableBody.innerHTML = '';

        // Validate if data is an array
        if (!Array.isArray(data) || data.length === 0) {
            tableBody.innerHTML = '<tr><td colspan="3" class="text-center">No data available</td></tr>';
            return;
        }

        data.forEach((user, index) => {
            const row = `<tr class="border-b border-gray-700 hover:bg-gray-800">
                            <td class="px-4 py-2">${index + 1}</td>
                            <td class="px-4 py-2">${user.name}</td>
                            <td class="px-4 py-2">${user.total_points || '0'}</td>
                        </tr>`;
            tableBody.innerHTML += row;
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        showGlobal();
    });
</script>

@endsection
