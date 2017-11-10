<?php

use Illuminate\Database\Seeder;
use App\Form_work;
class FormWorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $form_work = new Form_work();
        $form_work->name = "Toàn thời gian";
        $form_work->slug = str_slug($form_work->name);
        $form_work->save();

        $form_work = new Form_work();
        $form_work->name = "Bán thời gian";
        $form_work->slug = str_slug($form_work->name);
        $form_work->save();

    }
}
