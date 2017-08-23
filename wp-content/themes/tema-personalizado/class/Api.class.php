<?php 
	#namespace Class\Api;

	class Api
	{
		private $privateKey;
		private $publicKey;
		private $timestamp;

		public function __construct(){
			$this->timestamp = time();
		}

		public function __destruct(){}

		public function __get($attr){
			return $this->$attr;
		}

		public function __set($attr, $value){
			$this->$attr = $value;
		}

		private function generateHash()
		{
			return hash('md5',$this->timestamp.$this->privateKey.$this->publicKey);
		}

		public function connect()
		{
			$ch = curl_init();
			//curl_setopt($ch, CURLOPT_URL, "http://gateway.marvel.com:80/v1/public/characters?ts=$timestamp&apikey=<YourAPIKEY>&hash=$md5&name=Iron%20man");
			curl_setopt($ch, CURLOPT_URL, "http://gateway.marvel.com/v1/public/comics?ts={$this->timestamp}&apikey={$this->publicKey}&hash={$this->generateHash()}");
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			    'Content-Type: application/json')                                                                       
			);
			 $output= curl_exec($ch) or die(curl_error()); 
			 echo str_replace('\\/', '/', $output);
			curl_close($ch);
		}

	}
