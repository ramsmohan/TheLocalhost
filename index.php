<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TheLocalhost</title>

</head>
<body>
	<h1>TheLocalhost</h1>
	<table>
		<!-- <tr>
			<th>Project</th>
			<th>Link</th>
		</tr> -->
		<tr><td colspan=2><input type="text" id="search_project" placeholder="Search Project Here"></td></tr>
		<?php
			$myDirs = scandir( __DIR__ );
			foreach ($myDirs as $dir) 
			{
				if( ! is_file( $dir ) )
				{
					if(( $dir == '.' )|| ($dir == '..') )
						echo ''; //'<tr><td colspan=2>Parent</td></tr>';
					else
						echo '<tr>
								<td>'.strtoupper( $dir ).'</td>
								<td><a href="../../'.strtolower( $dir ).'">Open Project</a></td>
							</tr>'; ?>
		<?php
				}
			}
		?>

		
	</table> 

</body>
	<style type="text/css">
		body{ background: rgb(2,0,36);
background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(71,93,153,1) 0%, rgba(121,9,80,1) 0%, rgba(56,28,110,1) 44%, rgba(0,0,0,1) 100%);
		 color: rgba(255,255,255,1); font-family: monospace; 
		 margin: 0 auto;
		 padding: 10% 20%;
		}
		table, tr, td, th{border: 1px dashed #000; padding: 5px; min-width: 200px; text-align: center;}
		a{ color: antiquewhite;  }
		input[type=text]{ width: 80%; background: rgba( 255,255,255,0.4 ); padding:5px 5px; border-radius: 4px; color: #fff; margin:5px; border: 1px solid #fff }
		::-webkit-input-placeholder { color: antiquewhite; }
		:-ms-input-placeholder { color: antiquewhite; }
		::placeholder { color: antiquewhite; }
	</style>
</html>