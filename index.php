<?php
session_start();
include'dbconnection.php';

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Testing site</title>
  </head>

  <body>

  <table>

                              <thead>
                              <tr>
                                  <th></th>
                                <th>Name</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from fundraiser");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['name'];?></td>
                                  <td>
                                    <a href="donate.php?uid=<?php echo $row['id'];?>">Donate</a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>

                              </tbody>
                          </table>

  </body>
</html>
