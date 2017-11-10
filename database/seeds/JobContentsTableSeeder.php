<?php

use Illuminate\Database\Seeder;
use App\Job_content;
class JobContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $job_content = new Job_content();
        $job_content->job_id = "1";
        $job_content->name = "Phát sản phẩm mẫu";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "1";
        $job_content->name = "Bán hàng";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "1";
        $job_content->name = "Giới thiệu sản phẩm";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "1";
        $job_content->name = "Khai trương";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "1";
        $job_content->name = "Lễ tân";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "2";
        $job_content->name = "Mẫu ảnh nghệ thuật";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "2";
        $job_content->name = "Mẫu nội y áo tắm";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "2";
        $job_content->name = "Mẫu quần áo";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "3";
        $job_content->name = "Điện ảnh";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "3";
        $job_content->name = "Sân khấu";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "3";
        $job_content->name = "Hài";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "4";
        $job_content->name = "Sân khấu";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "4";
        $job_content->name = "Sự kiện";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "5";
        $job_content->name = "Nhân sự";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "5";
        $job_content->name = "Kế toán";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "5";
        $job_content->name = "Văn phòng";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "6";
        $job_content->name = "Hội nghị";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "6";
        $job_content->name = "Văn phòng";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "6";
        $job_content->name = "Lãnh đạo";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "7";
        $job_content->name = "Bảo hiểm";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "7";
        $job_content->name = "Bất động sản";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "8";
        $job_content->name = "Tiếp thị";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "8";
        $job_content->name = "Hàng không";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();

        $job_content = new Job_content();
        $job_content->job_id = "8";
        $job_content->name = "Dịch thuật";
        $job_content->slug = str_slug($job_content->name);
        $job_content->save();
    }
}
