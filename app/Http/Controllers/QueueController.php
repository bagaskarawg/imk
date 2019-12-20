<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QueueController extends Controller
{
    public function kk()
    {
        $this->validate(request(), [
            'service' => 'required',
            'surat_kelahiran' => 'required|file',
            'buku_nikah' => 'required|file',
            'surat_cerai' => 'file',
            'akta_kelahiran' => 'file',
        ]);

        $user = auth()->user();
        $queue = new Queue();
        $queue->service = request('service');
        $queue->number = $queue->generateNumber();
        $queue->schedule = $queue->calculateSchedule();
        foreach (request()->file() as $field => $file) {
            $fileName = md5(now() . rand()) . '.' . $file->extension();
            $queue->{$field} = $file->storeAs("kartu_keluarga/{$user->id}", $fileName);
        }

        $user->queues()->save($queue);

        return redirect()->route('registration.ticket', $queue);
    }

    public function ticket(Queue $queue)
    {
        if ($queue->user_id !== auth()->user()->id) {
            abort(403);
        }

        return Inertia::render('DocumentRegistration/Ticket', compact('queue'));
    }
}
