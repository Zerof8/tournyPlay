<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $SubscriptionTypeSeeder = [
            [
                'id' => 1,
                'type' => 'monthly',
                'description' => 'Monthly recurring subscription, can always be canceled',
                'length'=>'30',
            ],
            [
                'id' => 2,
                'type' => 'yearly',
                'description' => 'yearly recurring subscription, can always be canceled',
                'length'=>'365',
            ],
            [
                'id' => 3,
                'type' => 'special',
                'description' => 'special offer for limited time',
                'length'=>'5',
            ],
        ];

        //insert the privileges into the database
        Subscription::insert($SubscriptionTypeSeeder);
    }
}
