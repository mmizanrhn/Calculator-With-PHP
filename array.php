    <?php
       // $months=array('january','fab','march','april','may','june');
       // var_dump($months);
       // print_r($months);
       //echo $months[3][1];
       //$users=array(
       //'name'=>array('Mizan','Shakil','Kamal'),'Nizam',
       //'id'=>'123',
       // 'age'=>'34'
       // );
       //echo $users['name'];
       // for($i=0;$i<10;$i++){
       // echo $i;
       // }
       //foreach($users as $user =>$i){
       // echo "<li>".$user."=". $i."</li>";

       $sites=array(

            'google'=> 'https://www.google.com',
            'youtube'=> 'https://www.youtube.com',
            'facebook'=> 'https://www.facebook.com',
            'yahoo'=> 'https://www.yahoo.com'
        );

            foreach($sites as $site_name =>$site_url){

               echo "<li><a href='$site_url'>$site_name</a></li>";
            }

    ?>