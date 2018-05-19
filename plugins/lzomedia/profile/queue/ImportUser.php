<?php
/**
 * Created by PhpStorm.
 * User: lzo
 * Date: 20/04/17
 * Time: 23:33
 */

namespace lzomedia\profile\queue;


use Illuminate\Queue\Queue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class ImportUser implements SelfHandling, ShouldQueue
{

    use InteractsWithQueue, SerializesModels;

    /**
     * @param $job
     * @param $data
     */
    public function fire($job, $data){

        if($data){


            $name = @$data['firstName'];
            $email = @$data['email'];

            if (!$user = Auth::findUserByLogin($email)) {


                $user = Auth::register([
                    'name' => $name,
                    'email' => $email,
                    'password' => 'changeme',
                    'password_confirmation' => 'changeme',
                ],true);


                $profile = $user->profile ?: new \LzoMedia\Groups\Models\Profile();

                $profile->city = $data['printCity'];

                $profile->phone = $data['printPhone'];

                $profile->state = $data['printState'];

                $profile->zip = $data['printZip'];

                $user->profile()->save($profile);


            }else{


                $user->surname = $data['lastName'];

                $profile = $user->profile ?: new \LzoMedia\Groups\Models\Profile();

                $profile->city = $data['printCity'];

                $profile->phone = $data['printPhone'];

                $profile->state = $data['printState'];

                $profile->zip = $data['printZip'];

                $user->profile()->save($profile);
                
                // prepare the profile


            }

            $job->delete();
        }
    }

    //@todo improve this method for having different keys for email and if email is not set generate one


}