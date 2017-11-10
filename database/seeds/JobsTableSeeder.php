<?php

use Illuminate\Database\Seeder;
use App\Job;
class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $job = new Job();
        $job->name = "PB&PG";
        $job->slug = str_slug($job->name);
        $job->save();

        $job = new Job();
        $job->name = "Người mẫu";
        $job->slug = str_slug($job->name);
        $job->save();

        $job = new Job();
        $job->name = "Diễn viên";
        $job->slug = str_slug($job->name);
        $job->save();

        $job = new Job();
        $job->name = "MC";
        $job->slug = str_slug($job->name);
        $job->save();

        $job = new Job();
        $job->name = "Hành chính";
        $job->slug = str_slug($job->name);
        $job->save();

        $job = new Job();
        $job->name = "Trợ lý/Thư ký";
        $job->slug = str_slug($job->name);
        $job->save();

        $job = new Job();
        $job->name = "Bán hàng";
        $job->slug = str_slug($job->name);
        $job->save();

        $job = new Job();
        $job->name = "Marketing";
        $job->slug = str_slug($job->name);
        $job->save();
    }
}
