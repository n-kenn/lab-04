<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
		<table style="width:100%">
			<?php
				echo "<tr>";
				for ($i = 0; $i <= 100; $i++)
				{
					if ($i == 0)
					{
						echo "<th> </th>";
					}
					else
					{
						echo "<th>".$i."</th>";
					}
				}
				echo "</tr>";
				for ($i = 1; $i <= 100; $i++)
				{
					echo "<tr>";
					for ($j = 0; $j <= 100; $j++)
					{
						if ($j == 0)
						{
							echo "<th>".$i."</th>";
						}
						else
						{
							echo "<th>".($j*$i)."</th>";
						}
					}
					echo "</tr>";
				}
				echo "</tr>";
			?>
		</table>
	</body>
</html>