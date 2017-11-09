<?php


	/**
	*
	*/
     
	final class jsonData
	{

       
        public function __construct()
        {
            $this->getJsonInfo();

           // var_dump($this->PVersion);
        }

        public static function Instance()
        {
            static $inst = null;
            if ($inst === null) {
                $inst = new jsonData();
            }
            return $inst;
        }

		public $PVersion =array('X' => 0, 'Y' =>0 , 'Z'=>0);
		public $POlderVers=array();
		public $PLocation="./data";   ///poner una direccion que se pueda cambiar con el POST

        /**
         * @param mixed $PLocation
         */
        public function setPLocation($PLocation)
        {
            $this->PLocation = $PLocation;
            $this->updateMyJson();
        }

        /**
         * @param mixed $POlderVers
         */
        public function addPOlderVers($POlderVe)
        {echo "<br>";
          //  var_dump($this->POlderVers);echo "<br>";
            array_push($this->POlderVers,$POlderVe);
         //   var_dump($this->POlderVers);echo "<br>";
            $this->updateMyJson();
            //$this->POlderVers[] = $POlderVers;
        }

        /**
         * @param array $PVersion
         */
        public function setPVersion($X,$Y,$Z)
        {
            $this->PVersion = array('X' => $X, 'Y' =>$Y , 'Z'=>$Z);
        }
        public function setPVersio($vers){
            $this->PVersion=$vers;
        }
        /**
         * @return mixed
         */
        public function getPLocation()
        {
            return $this->PLocation;
        }

        /**
         * @return array
         */
        public function getPVersion()
        {
            return $this->PVersion;
        }

        public function VersionString(){
            return $this->PVersion['X'].".".$this->PVersion['Y'].".".$this->PVersion['Z'];
           $this->updateMyJson();
        }

		private function __clone()
        {
            // TODO: Implement __clone() method.
        }

        private function __wakeup()
        {
            // TODO: Implement __wakeup() method.
        }



        function updateMyJson()
		{
			$src = $this->PLocation;
			$ver = $this->PVersion;
			$old = $this->POlderVers;

			$arr = array('src' => "$src", 'version' => $ver, 'older' => $old);
			//echo json_encode($arr);
			$fp = fopen("Info/info.json", "w");
			fwrite($fp, json_encode($arr));
			fclose($fp);
		}

        function getJsonInfo(){
            $str = "Info/info.json";
            if(!file_exists($str)){
                $this->updateMyJson();
                echo "no existe";
                header("Location: source.php");
            }
            $string = file_get_contents($str);
            //var_dump($string);
            $json_a = json_decode($string, true);
            //var_dump($json_a);
            //echo "HOLAAA   ".$json_a["version"];

            $this->setLocation($json_a["src"]);
            $this->PLocation=$json_a["src"];
            $this->PVersion= $json_a["version"];
            //var_dump($this->Pversion);
            echo "<br>";
            $this->POlderVers=$json_a['older'];
        }
		function setLocation($src){
			$Location = $src;
			$this->updateMyJson();
		}

		function createNewVersion($typeOfUp){
			$this->saveOldVersion();
			$X=$this->PVersion['X'];
			$Y=$this->PVersion['Y'];
			$Z=$this->PVersion['Z'];

			switch ($typeOfUp) {
				case 0:
                    $X++;
                    $Y=0;
                    $Z=0;
					break;
				case 1:
                    $Y++;
                    $Z=0;
					break;
                case 2:
                    $Z++;
					break;
				}

            $this->setPVersion($X,$Y,$Z);

			$this->updateMyJson();
	}


   

    function saveOldVersion()
    {
        $ver = $this->PVersion;
        $arrayOld = array('version' => $ver);
        $this->addPOlderVers($arrayOld);

       recurse_copy("$this->PLocation","data/".$this->VersionString());
        //Falta hacer el copiado real
    }





	}


function recurse_copy($src,$dst) {
  //  echo "La src es: ".$src . "  " . $dst;
        $dir = opendir($src);
        @mkdir($dst);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '\\' . $file) ) {
                    recurse_copy($src . '\\' . $file,$dst . '\\' . $file);
                }
                else {
                    copy($src . '\\' . $file,$dst . '\\' . $file);
                }
            }
        }
        closedir($dir);
}






 





?>