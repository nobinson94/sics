<html><body>
<?php
    $connect=mysql_connect('localhost', 'hackathon', 'yt20150705');
    mysql_select_db("hackathon");


    //$result = mysql_query("select count(*) from BOARD", $connect);
$per_page = 2;
$start = $_GET['start'];
$record_count = mysql_num_rows(mysql_query("SELECT * FROM BOARD"));
$max_pages = $record_count / $per_page; //may come out as decimal
if (!$start)
   $start = 0;
   $get = mysql_query("SELECT * FROM BOARD LIMIT $start, $per_page");
while ($row = mysql_fetch_assoc($get))
{
 // get data
 $num = $row['num'];
 $title = $row['title'];
 
 echo $num." (".$title.")<br />";

}
$prev = $start - $per_page;$next = $start + $per_page;
if (!($start<=0))
       echo "<a href='page.php?start=$prev'>Prev</a> ";
//show page numbers

$i=1;

for ($x=0;$x<$record_count;$x=$x+$per_page)
{
 if ($start!=$x)
    echo " <a href='page.php?start=$x'>$i</a> ";
 else
    echo " <a href='page.php?start=$x'><b>$i</b></a> ";
 $i++;
}
if (!($start>=$record_count-$per_page))
       echo " <a href='page.php?start=$next'>Next</a>";
?>
</body>
</html>