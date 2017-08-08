<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Product::create([

            'name' => 'Ninja Hoddie',
            'avatar' => 'upload\hoddies.jpg',
            'price' => 1250,
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. ',

        ]);

        \App\Product::create([

            'name' => 'Blink T-Shirt',
            'avatar' => 'upload\blink.jpg',
            'price' => 420,
            'body' => 'Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.',

        ]);


        \App\Product::create([

            'name' => 'Bedroom Sofa',
            'avatar' => 'upload\sofa4.jpg',
            'price' => 41250,
            'body' => 'This handy tool helps you create dummy text for all your layout needs.We are gradually adding new functionality and we welcome your suggestions and feedback.Please feel free to send us any additional dummy texts.',

        ]);


        \App\Product::create([

            'name' => 'Ninja T-shirt',
            'avatar' => 'upload\ninja.jpg',
            'price' => 550,
            'body' => 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. ',

        ]);


        \App\Product::create([

            'name' => 'Football',
            'avatar' => 'upload\football.jpg',
            'price' => 750,
            'body' => 'I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.',

        ]);


        \App\Product::create([

            'name' => 'Hoddie',
            'avatar' => 'upload\hoddie_1.jpg',
            'price' => 1350,
            'body' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text .',

        ]);

        \App\Product::create([

            'name' => 'Drawing Room',
            'avatar' => 'upload\sofa2.jpg',
            'price' => 20500,
            'body' => ' I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.',

        ]);

        \App\Product::create([

            'name' => 'Outside Sitting Table',
            'avatar' => 'upload\outtable.jpg',
            'price' => 18000,
            'body' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. ',

        ]);

    }
}
