<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
	{
		$url_data = [
			[
				'title' => 'Vasiliy',
				'url' => 'github.com/Arnon-hs'
			],
			[
				'title' => 'Vasiliy',
				'url' => 't.me/razer17'
			]
		];
		return view('start', compact('url_data'));
	}
	public function getJson()
	{
		return $url_data = [
			[
				'title' => 'Vasiliy',
				'url' => 'github.com/Arnon-hs'
			],
			[
				'title' => 'Vasiliy',
				'url' => 't.me/razer17'
			]
		];
	}
	public function chartData(){
    	return [
    		'labels' => ['Март', 'Апрель', 'Май', 'Июнь'],
			'datasets' => [[
				'label' => 'Продажи',
				'backgroundColor' => ['#35495e', '#41b883', '#231f20', '#c3b59b'],
				'data' => [15000, 20000, 10000, 40000],
			]]
		];
	}
	public function chartRandom()
	{
		return [
			'labels' => ['Март', 'Апрель', 'Май', 'Июнь'],
			'datasets' => [
				[
					'label' => 'Золото',
					'backgroundColor' => '#35495e',
					'data' => [rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000)],
				],
				[
					'label' => 'Серебро',
					'backgroundColor' => '#41b883',
					'data' => [rand(0,40000), rand(0,40000), rand(0,40000), rand(0,40000)],
				]
			]
		];
	}
}
