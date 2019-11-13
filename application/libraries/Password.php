<?php

	class password{

		public function hash($password){

			return password_hash($password, PASSWORD_BCRYPT);

		}

	}