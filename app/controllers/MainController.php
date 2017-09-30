<?php

	class MainController
	{

		public function index()
		{
			Response::render("home");
		}

		public function about()
		{
			echo "Hola desde el about";
		}

	}