// app/database/seeds/UserTableSeeder.php

<?php
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{

	public function run()
	{
		\DB::table('category')->delete();
		category::create(
			array(
				'Name'     		=> 'Food'				
			)
		);
		category::create(
			array(
				'Name'     		=> 'Clothe'				
			)
		);
		category::create(
			array(
				'Name'     		=> 'Sport Equipment'				
			)
		);

		\DB::table('user')->delete();
		user::create(
			array(
				'Username'     		=> 'admin',
				'Password'     		=> '1234',
				'Role'     			=> 'admin'				
			)
		);
		user::create(
			array(
				'Username'     		=> 'user',
				'Password'     		=> '1234',
				'Role'     			=> 'user'		
			)
		);
		

		\DB::table('product')->delete();
		product::create(
			array(
				'Name'     		=> 'Protein Chicken',
				'Description' 	=> 'Super muscular with this chicken! ',
				'Price'    		=> '200',
				'CatId'			=>	'1',
				'Image' 		=> 'http://cdn-image.myrecipes.com/sites/default/files/styles/4_3_horizontal_-_1200x900/public/rosemary-garlic-chicken-quarters-sl.jpg?itok=t7lywxvk',
			)
		);

		product::create(
			array(
				'Name'     		=> 'Blue Boxing Gloves',
				'Description' 	=> 'Get your boxing class a little more color with anti bacteria boxing gloves.',
				'Price'    		=> '200',
				'CatId'		=>	'3',
				'Image' 		=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRFFrcSUKkiRd2zVtyLMuOo0qOu4TbJZzxCY3qTZYSoZ4PWIr-gQ'
			)
		);

		product::create(
			array(
				'Name'     		=> 'BADminton',
				'Description' 	=> 'BADminton. Perfect for bad people.',
				'Price'    		=> '450',
				'CatId'		=>	'3',
				'Image' 		=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDsMYFAr9ZaY3t6V4gcUwfw7aLSLbkEYpGpch-2lLddFWGdO72Ow'
			)
		);

		product::create(
			array(
				'Name'     		=> 'Neon Shirt',
				'Description' 	=> 'Nice pretty shirt',
				'Price'    		=> '250',
				'CatId'			=>	'2',
				'Image' 		=> 'https://www.dhresource.com/0x0s/f2-albu-g4-M01-93-79-rBVaEVdlTNeAGmrzAACuLoSs7nA322.jpg/man-badminton-shirt-cool-hot-sale-sport-wear.jpg'
			)
		);
		product::create(
			array(
				'Name'     		=> 'Padthai',
				'Description' 	=> 'Delicious Padthai for your stomach. Imported from Tipsamai Padthai Ghost Door.',
				'Price'    		=> '60',
				'CatId'			=>	'1',
				'Image' 		=> 'https://img.kapook.com/u/2015/surauch/cook2/PT1.jpg',
			)
		);
		product::create(
			array(
				'Name'     		=> 'Sport Fruit',
				'Description' 	=> 'Eat it and become sport master!',
				'Price'    		=> '79',
				'CatId'		=>	'1',
				'Image' 		=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs9VtSuNUJZbOJ-MdZAB6smsA3zlOZJjQRgz4BDo0kaIhj3uRXJA',
			)
		);
		product::create(
			array(
				'Name'     		=> 'Hula Hula Eiyayaya Pai Tale',
				'Description' 	=> 'Stay with sea breeze with Hula Hula Eiyayaya Pai Tale.',
				'Price'    		=> '699',
				'CatId'		=>	'3',
				'Image' 		=> 'https://www.canyonhoops.com/wp-content/uploads/2011/08/p-76292-1170.jpg',
			)
		);
	/*
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Chris Sevilleja',
        'username' => 'sevilayha',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('awesome'),
    ));
    */
}

}