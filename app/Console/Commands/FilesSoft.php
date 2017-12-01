<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\MediaModel;
use App\User;

class FilesSoft extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'files:softDelete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add and soft Delete a file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = User::first();
        $user->addMediaFromUrl('https://www.planwallpaper.com/static/images/desktop-year-of-the-tiger-images-wallpaper.jpg')->toMediaCollection('images');
        $file = MediaModel::first();
        $file->delete();
    }
}
