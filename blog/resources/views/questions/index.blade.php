<x-app-layout title="Q&A">
    <div class="pt-10 mt-10 border-t border-gray-100 comments-box">
        <h2 class="mb-5 text-2xl font-semibold text-gray-900">Question and Answers</h2>
        <!-- Create Question Button -->
        <a href="{{ route('questions.create') }}" class="float-right px-4 py-2 rounded" style="background-color: #3490dc; color: #ffffff;">Create Question</a>

        <!-- Dummy Questions and Answers -->
        @foreach($questions as $question)
            <div class="comment py-5">
                <div class="text-sm text-justify text-gray-700 mb-2">{{ $question->content }}</div>
                @foreach($question->answers as $answer)
                    <div class="text-sm text-justify text-gray-700 ml-4">{{ $answer->content }}</div>
                @endforeach
            </div>
        @endforeach
        <!-- Pagination Links -->
        <div class="my-2">
            {{ $questions->links() }}
        </div>
    </div>
</x-app-layout>
