<div class="divide-y divide-solid">
    @foreach ($trueFalseQuestions as $id => $question)
        <div wire:key="{{ $id }}"
            class="py-6 px-3 {{ $trueFalseQuestions[$id]['user_answer'] !== null ? ($trueFalseQuestions[$id]['user_answer'] == $trueFalseQuestions[$id]['answer'] ? 'bg-green-100' : 'bg-red-100') : '' }}">
            @if ($trueFalseQuestions[$id]['user_answer'] !== null)
                <div class="pb-2 font-bold">
                    @if($trueFalseQuestions[$id]['user_answer'] == $trueFalseQuestions[$id]['answer'])
                    <span class="text-green-800">Correct, this statement is {{ $trueFalseQuestions[$id]['answer'] ? 'true' : 'false' }}</span>
                    @else
                    <span class="text-red-800">Incorrect, this statement is {{ $trueFalseQuestions[$id]['answer'] ? 'true' : 'false' }}</span>
                    @endif
                </div>
            @endif
            <button class="btn btn-blue" wire:click="check({{ $id }}, true)">T</button> - <button class="btn btn-blue" wire:click="check({{ $id }}, false)">F</button>
            {{$id+1}}. {{ $question['question'] }}
        </div>
    @endforeach
</div>
