<?php
$username='John';
return view('welcome',['name'=>$username]);

?>

 <body>
    <div>Hi,<?php echo $username ?></div>
 </body>


 Hi,<?php $username?>

