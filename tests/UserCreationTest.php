<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCreationTest extends TestCase
{
	public function setUp()
	{
		parent::setUp();
		Session::start();
		Artisan::call('migrate');
	}
    /**
     * @test
     */
    public function hitting_user_create_route_creates_record_in_database()
    {
    	$params = [
    		'_token' => csrf_token(),
    		'name' => 'Johnny',
    		'email' => 'Jones',
    	];

        $this->call('POST','/users',$params);
        $this->assertResponseOk();
        $this->seeInDatabase('users',[
        	'name' => 'Johnny',
    		'email' => 'Jones',
        ]);
    }
}
