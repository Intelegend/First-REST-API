<?php

namespace Tests\Feature;

use App\Http\Middleware\ApiAuthentification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FreelancerTest extends TestCase
{
	use RefreshDatabase;

	public function setUp(): void
	{

		parent::setUp();
	}

	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testFalseAuthentication()
	{
		$response = $this->get('/');

		$response->assertStatus(401);
	}

	public function tesTrueAuthentication()
	{
		$response = $this->get('/', self::getToken());

		$response->assertStatus(200);
	}

	public function testAuthenticationNotebook()
	{
		$response = $this->get('/api/v1/notebooks');

		$response->assertStatus(401);
	}

	public function testGetNotebooks()
	{
		$response = $this->get('/api/v1/notebooks', self::getToken());

		$response->assertStatus(200);
	}

	public function testCreateNotebooks()
	{

		$data = [];

		$response = $this->post('/api/v1/notebooks', $data, self::getToken());

		$response->assertStatus(422);

		$data = [
			'name' => 'Ivan',
			'company' => 'Company CO',
			'phone' => '+792001122334',
			'email' => 'test@gmail.com',
			'birthday' => '+792001122334',
			'photo' => 'https://ru.depositphotos.com/18969841/stock-photo-modern-office-interior.html',
		];

		$response = $this->post('/api/v1/notebooks', $data, self::getToken());

		$response->assertStatus(201);
	}

	private static function getToken()
	{

		return [ApiAuthentification::API_KEY_HEADER => config('services.api.token')];
	}
}
