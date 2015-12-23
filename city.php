
<?php
 $q=$_GET["q"];
 include_once('conn.php');
 $sql="SELECT * FROM city WHERE sid = '".$q."' order by city";
$result = mysql_query($sql);
?>
<select name="cmb_city" class="sel">
<?php
while($row = mysql_fetch_array($result))
{
?>
    <option value="<?php echo $row['cityid']; ?>"><?php echo $row['city'];?></option>
<?php
}
?> 
</select>
