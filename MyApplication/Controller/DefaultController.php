<?php

namespace MyApplication\Controller;
use MyApplication\Controller;

class DefaultController extends Controller
{
	public function index()
	{
		$this->response->setContent('Try /hello/dave');
	}
}