<?php
   class Controller
   {
      public function view($view,$data = array()){
           extract($data);
           
           if(file_exists(VIEWS.$view.".view.php"))
           {
              require(VIEWS.$view.".view.php");
            }else
            {
              require(VIEWS."404.view.php");
           }
      }

      public function load_model($model){
         if(file_exists(MODEL.ucfirst($model).".php")){
            require(MODEL.ucfirst($model).".php");
            return $model = new $model();
         }
         return false;
      }
   }
   


?>