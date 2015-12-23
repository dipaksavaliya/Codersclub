
<table align="center" border="1" width="100%">
<tr>
    <th>Sr. No</th>
    <th>Project Title</th>
    <th>Technologies</th>
    <th>Project Def</th>
    <th>Project Budget</th>
    <th>Days Left</th>
    <th>Bid</th>
</tr>
<?php
    include_once('conn.php');
    $qryp="select *,datediff(enddate,curdate()) as daysleft from project where datediff(enddate,curdate()) >0
 order by proid desc";
    $rs_sel=mysql_query($qryp);
    $i=1;
    
    while($row_sel=mysql_fetch_array($rs_sel))
    {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <tt><td><?php echo $row_sel[3];?></td>
            <td><?php echo $row_sel[4];?></td>
            <td><?php echo $row_sel[5];?></td>
            <td><?php echo $row_sel[7];?></td>
            <td><?php echo $row_sel[11];?></td>
            <td><a href="bidp2.php?bid_id='<?php echo $row_sel['proname']; ?>'">Bid</a></td></tt>
        </tr>
        <?php
        $i++;
    }
?>
</table>

