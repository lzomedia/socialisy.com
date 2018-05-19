<?php

namespace LzoMedia\Groups\Queue;


use Illuminate\Queue\Queue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class ImportGroup implements SelfHandling, ShouldQueue {


	use InteractsWithQueue, SerializesModels;


	public function fire( $job, $data ) {


		$group = $data['group'];


		$token = $data['token'];

		/// start the import of the posts


	}

}