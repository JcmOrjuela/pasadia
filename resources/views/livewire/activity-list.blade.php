<div>
    <div class="grid grid-cols-3 gap-4 mt-8">
        @foreach ($activities as $activity)
            <x-activity-card :activity="$activity"> </x-activity-card>
        @endforeach
    </div>
    <div class="py-5">
        {{ $activities->links() }}
    </div>
</div>
