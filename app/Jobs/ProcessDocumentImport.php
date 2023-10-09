<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use app\Models\Document;

class ProcessDocumentImport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        //
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {

        $exercise = $this->data['exercise'];
        $documents = $this->data['documents'];       

        foreach ($documents as $documentData) {
            Document::create([
                'exercise' => $exercise,
                'category' => $documentData['category'],
                'title'    => $documentData['title'],
                'content'  => $documentData['content']
            ]);
        }
    }
}
