<?php

namespace LzoMedia\Groups\Queue;


use Illuminate\Queue\Queue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use LzoMedia\FacebookExtractor\FacebookExtractor;

class ImportPosts implements SelfHandling, ShouldQueue {


	use InteractsWithQueue, SerializesModels;


	/**
	 *
	 * @param $job
	 * @param $data
	 */
	public function fire( $job, $data ) {



	}

}