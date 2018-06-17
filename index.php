<?php
  include 'db.php';
 ?>
<!DOCTYPE html>

<html>
<head>
  <title>Chat system in php</title>
  <link rel="stylesheet" href="style.css" media="all"/>
</head>
<body>
  <div id="container">
    <div id="chat_box">
      <?php
        $query="SELECT * FROM chat ORDER BY id DESC";
        $run = $con->query($query);

        //while($row = $run->fetch_array()) :
        while($row = $run->fetch_object()) {
      ?>
      <div id="chat_data">
        <span style="color:green"><?php echo $row->name;?> </span> :
        <span style="color:brown"><?php echo $row->msg;?></span>
        <span style="float:right"><?php echo $row->date;?></span>
      </div>
      <?php
      //  endwhile;
    }
       ?>
    </div>
    <form method="post" action="index.php">
      <input type="text" name="name" placeholder="enter name"/>
      <textarea name="enter message" placeholder="Enter message"></textarea>
      <input type="submit" name="submit" value="Send it!">
    </form>
  </div>
</body>
</html>
