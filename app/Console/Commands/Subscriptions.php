<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Subscriptions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:sub';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks for subscriptions status';

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
     * @return int
     */
    public function handle()
    {
        $today = Carbon::now()->format('Y-m-d');
        //loop through all users and check for subscriptions
        $users = User::all();
        foreach ($users as $user) {
            //check if user has a subscription
            if ($user->role_id == 3 && $user->is_subscribed && $user->subscription_ends_at < $today) {
                //user has a subscription but it has expired
                User::update([
                    'is_subscribed' => false,
                    'subscription_ends_at' => null,
                ]);
            }
        }
    }
}
