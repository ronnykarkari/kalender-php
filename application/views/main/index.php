
<!doctype html>


	<?php $months = array("January", "februari", "maart", "april", "mei", "juni","juli", "augustus", "september", "oktober", "november", "december"); ?>
	<body>
        <?php 

        for ($x = 0; $x <= 11; $x++){
            $i = 0;
            $days = array(1);
            foreach ($birthdays as $item):
                if( $i == 0){
                if($item['month'] == $x + 1){
                if(!$item['person'] == null){
                echo "<h1>".$months[$x]."</h1>";
                $i = 1;
                }
            }
            }
                if($item['month'] == $x + 1){
                    if(!isset($days[$item['day']])){
                echo "<h2>".$item['day']."</h2>
                ";
                $days[$item['day']] = true;
                    }
                echo "<p>
                    <a href=\"edit/".$item['id']."\">
                        ".$item['person']." (".$item['year'].")</a>
                        
                    <a href=\"".site_url()."delete/".$item['id']."\">x</a>
                </p>";
                }
            endforeach;
        }
                ?>

<p><a href="<?php echo site_url(); ?>create">+ Toevoegen</a></p>

	</body>
</html>
