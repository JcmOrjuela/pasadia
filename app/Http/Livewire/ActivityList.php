<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use Illuminate\Http\Request;
use Livewire\Component;

class ActivityList extends Component
{
    public function render(Request $r)
    {
        $ativities = Activity::with('images')
            ->where('description', 'like', "%{$r->search}%");

        if (isset($r->date)) {
            $ativities->where('start_date', '>=', $r->date);
        }

        return view('livewire.activity-list', [
            'activities' => $ativities
                ->orderBy('qualification', 'DESC')
                ->paginate(9)
        ]);
    }
}
