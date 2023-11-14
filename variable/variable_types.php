<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php 
        $firstName = "Marine";
        $age = 31;
        $eyeColor = "blue";
        $family = array(
            0 => "Marc",
            1 => "Pascale",
            2 => "Sebastien",
            3 => "Gregory"
        );
        $is_hungry: true;
    ?>
    <p>Hi! My name is <?php echo $firstName; ?>.</p>
    <p>I am <?php echo $age; ?> years old.</p>
    <p>My eyes are <?php echo $eyeColor; ?>.</p>
    <p>The first person in my family is <?php echo $family[0]; ?>.</p>
  </body>
</html>