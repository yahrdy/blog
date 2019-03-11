<?php

use App\Profile;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Yeasir Arafat",
            'email' => "yeasirarafat321@gmail.com",
            'password' => Hash::make("secret"),
            'admin' => 1,
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avatar'=>'uploads/avatars/user.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie vulputate diam, vel rutrum tortor. Morbi accumsan interdum arcu, et luctus erat dapibus vel. Nulla vehicula risus eget elit tincidunt malesuada. Nam pellentesque, massa quis scelerisque blandit, massa mauris aliquet ligula, eu venenatis augue felis at lacus. Morbi fringilla tincidunt mi eu condimentum. Sed semper, libero id vehicula faucibus, libero tortor mattis augue, et ultricies urna tortor sed libero. Etiam molestie ultricies lacus quis porttitor.

                        In hac habitasse platea dictumst. Ut eu pulvinar magna. Vivamus ultricies rutrum egestas. Donec rutrum auctor libero quis pellentesque. Nunc mollis diam odio, a rhoncus felis condimentum ac. Proin et est tincidunt, molestie augue consequat, fringilla mi. Proin imperdiet neque vel ex egestas blandit. Aliquam id nibh libero. Donec et ultricies orci. Aenean vel nunc massa. Integer sit amet viverra diam. Proin quis diam tellus. Morbi laoreet vitae ante a bibendum. Morbi quis elementum nunc, a aliquam urna. Vestibulum in varius nulla, eu consequat enim.
                        
                        Mauris ut eleifend tortor. Duis nibh est, pretium sit amet sapien et, porttitor faucibus elit. Nullam imperdiet viverra mollis. Vestibulum justo mi, tristique in blandit at, cursus ac mi. Mauris luctus libero in risus fringilla, nec sollicitudin urna tristique. Proin scelerisque, enim et congue sagittis, ligula est tempus magna, id vestibulum ipsum ante ut tellus. Nulla eu mauris vitae justo posuere rutrum quis a lorem.
                        
                        Pellentesque ut velit id quam viverra vulputate eu ac libero. Morbi pulvinar sed urna sit amet pellentesque. Ut varius sed enim sed condimentum. Mauris mollis malesuada augue non ullamcorper. Donec suscipit nibh mauris, vel eleifend sapien malesuada id. Sed fermentum sapien non leo scelerisque, a commodo lectus lacinia. Nam non suscipit ipsum. Vivamus non iaculis augue. Duis facilisis fringilla felis, at accumsan mi pharetra sit amet. Vivamus eleifend molestie sapien, sit amet mattis libero auctor sed.
                        
                        Nulla facilisi. Vivamus varius ultrices mi. Sed efficitur ultrices quam ac placerat. Mauris placerat ligula ut ex auctor imperdiet sed et dui. Vestibulum ullamcorper odio ac eros mattis, quis dapibus ligula rutrum. Donec rutrum, ligula vel molestie consequat, nunc nulla vehicula velit, hendrerit sodales massa lorem a lectus. Morbi tincidunt eros eu ornare blandit. Vestibulum risus felis, aliquam at maximus quis, iaculis eget ex. Vivamus tortor dui, pellentesque imperdiet varius eu, luctus vel ipsum.',
            'facebook'=>'facebook.com/yahrdy',
            'youtube'=>'youtube.com',
        ]);
    }
}
