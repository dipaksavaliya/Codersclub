<?php
    include_once('conn.php');
    $q=$_GET["q"];
    $rs=mysql_query("select sid,sname from state where cid=$q order by sname");
?>
<select name="cmb_state" class="sel" onchange="show(this.value)">
<?php
        while($row=mysql_fetch_array($rs))
    { 
          
     ?>
            <option value="<?php echo $row['sid']; ?>"><?php echo $row['sname'];?></option>
        <?php
    }
?>
</select>