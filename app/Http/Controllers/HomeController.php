<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Slide;
use App\Models\ArtikelKucing;
use DB;

/**
 * HomeController
 *
 * PHP version 7
 *
 * @category HomeController
 * @package  HomeController
 * @author   Sugiarto <sugiarto.dlingo@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$products = Product::popular()->get();
		$this->data['products'] = $products;

		$slides = Slide::active()->orderBy('position', 'ASC')->get();
		$this->data['slides'] = $slides;

		$artikels = DB::table('artikel_pets')->select()->get();
		$this->data['artikels'] = $artikels;

		return $this->loadTheme('home', $this->data);
	}
}
