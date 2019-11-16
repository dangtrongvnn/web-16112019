<?php

namespace App\Http\Controllers;

use \App\Banners;
use \App\Category;
use \App\Products;

class PagesController extends Controller {
	public function getIndex() {
		$category = Category::all();
		/*var_dump($category);
		exit();*/
		$banners = Banners::all();
		return view('pages.home', compact('banners', 'category'));
	}

	public function getAbout() {
		return view('pages.about-us');
	}

	public function getCategory() {
		$category = Category::all();
		/*var_dump($category);
    	exit;*/
		return view('pages.all-products', compact('category'));
	}

	public function getCeramic() {
		$ceramic = Products::all()->where('cat_id', 1);
		/*var_dump($ceramic);
    	exit;*/
		return view('pages.ceramictiles', compact('ceramic'));
	}

	public function getSlab() {
		$slabs = Products::all()->where('cat_id', 2);
		/*var_dump($ceramic);
    	exit;*/
		return view('pages.slabs', compact('slabs'));
	}

	public function getPorcelain() {
		$porcelain = Products::all()->where('cat_id', 3);
		/*var_dump($ceramic);
    	exit;*/
		return view('pages.porcelaintiles', compact('porcelain'));
	}

	public function getMosaic() {
		$mosaic = Products::all()->where('cat_id', 4);
		/*var_dump($ceramic);
    	exit;*/
		return view('pages.mosaictiles', compact('mosaic'));
	}

	public function getSale() {
		$onsale = Products::all()->where('cat_id', 5);
		/*var_dump($ceramic);
    	exit;*/
		return view('pages.onsale', compact('onsale'));
	}
}
