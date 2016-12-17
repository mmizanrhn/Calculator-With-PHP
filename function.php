<?php
 //function get_full_name($f_name='Mohammad',$l_name='Meezan'){
     //return $f_name." ".$l_name;
 //}

 //$func=get_full_name();

 //echo $func;

   //$name1=get_full_name();
   //echo $name1;


   $students=array(
    array(
        'Name'=>'Meezan',
       'Id'=>'120',
       'age'=>'20'
        ),
    array(
        'Name'=>'Mahamud',
        'Id'=>'120',
        'age'=>'30',
       ),
     array(
         'Name'=>'Shakil',
         'Id'=>'10',
         'age'=>'40',
         )
    );

   function get_students_info($arr_name,$find){

     foreach ($arr_mame as $info){
         echo $info[$find]."<br/>";
     }

  }

  get_students_info($students,'Name');

?>