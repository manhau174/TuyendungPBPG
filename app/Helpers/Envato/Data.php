<?php 
// namespace App\Helpers\Envato;
use Illuminate\Support\Facades\DB;
class Data {
	public static function getJobs() {
		return DB::table('jobs')->get();
	}

	public static function getJobsContentByJob($job_id){
		return DB::table('job_contents')->where('job_id', $job_id)->get();
	}

	public static function getJobsContents(){
		return DB::table('job_contents')->get();
	}

	public static function getCities() {
		return DB::table('cities')->get();

	}
}

 ?>