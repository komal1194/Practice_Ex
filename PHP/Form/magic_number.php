<html><body><form method="post">
	Enter the No :<input type="number" name="number"></input></br>
	<input type="submit" value="submit"></input><br>
	
	</form>
	</body></html>
	<?php 
	if($_POST)
	{
	$number=$_POST['number'];
	 $sum=0;
	 $sum1=0;

	while($number>0)
		{
			 $x=$number%10;
			$sum=$sum+$x;
			$number=Math.floor($number/10);
		}
		if($sum>9)
		{
			while($sum>0)
			{
				$y=$sum%10;
				$sum1=$sum1+y;
				$sum=Math.floor($sum/10);
			}
		}
		if($sum1==1 || $sum==1)
		{
			echo "Your No is a Magic No";
		}
		else
		{
			echo "Your No is not a Magic no";
		}
	
}
	
	?>