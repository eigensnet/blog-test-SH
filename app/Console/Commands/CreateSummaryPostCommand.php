<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class CreateSummaryPostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a monthly summary in a post';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Post::create(
            [
                'title'       => 'Zusammenfassung (' . date('m/Y') . ')',
                'body'        => 'Zusammenfassung der Posts des letzten Monats.',
                'category_id' => 1,
                'user_id'     => 1,
            ]
        );
        $this->info('Post successful created.');
    }
}
