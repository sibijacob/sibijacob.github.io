<?php
$boys = [1,2,3,4,5,6,7,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,48,49,50,51,52,53,54,55,56,57,58,59];
$girls= [35,36,37,38,39,40,41,42,43,44,45,46,47,60];
if($_POST)
		{
		shuffle($boys);
		shuffle($girls);
		}

?>
<html>
<head>
<title>Seating Arrangement </title>
    <style type="text/css">
    
    </style>
</head>
<body>
<div align="center">
<table width="700" height="300" border="0">
  <tr>
    <td colspan="3"><div align="center" class="style5">4020 GHSS AYAPARAMPU</div></td>
  </tr>
  
  <tr>
    <td colspan="3"><div align="center">SEATING ARRANGEMENT FOR COMMERCE BATCH 2018-2020</div></td>
  </tr>
  
  <tr>
    <td height="39" colspan="3">
      <div align="center"><?php echo date("d-M-Y"); ?></div></td>
    </tr>
  <tr>
  <tr>
    <td width="300" height="142"><p align="center">&nbsp;</p>
      <div align="center">
        <table width="300" height="140" border="1">
        
 		   <tr>
 		    <td class="style4"><div align="center"><?php echo $boys[19]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[18]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[17]; ?></div></td>
            <td class="style4"><div align="center"><?php echo $boys[16]; ?></div></td>
          </tr>
          <tr>
            
            <td class="style4"><div align="center"><?php echo $boys[15]; ?></div></td>
            <td class="style4"><div align="center"><?php echo $boys[14]; ?></div></td>
            <td class="style4"><div align="center"><?php echo $boys[13]; ?></div></td>
            <td class="style4"><div align="center"><?php echo $boys[12]; ?></div></td>
          </tr>
          <tr>
            <td class="style4"><div align="center"><?php echo $boys[11]; ?></div></td>
           <td class="style4"><div align="center"><?php echo $boys[10]; ?></div></td>
           <td class="style4"><div align="center"><?php echo $boys[9]; ?></div></td>
           <td class="style4"><div align="center"><?php echo $boys[8]; ?></div></td>
           </tr>
           <tr>
           <td class="style4"><div align="center"><?php echo $boys[7]; ?></div></td>
           <td class="style4"><div align="center"><?php echo $boys[6]; ?></div></td>
           <td class="style4"><div align="center"><?php echo $boys[5]; ?></div></td>
           <td class="style4"><div align="center"><?php echo $boys[4]; ?></div></td>
          </tr>
          <tr>
            
            <td class="style4"><div align="center"><?php echo $boys[3]; ?></div></td>
            <td class="style4"><div align="center"><?php echo $boys[2]; ?></div></td>
            <td class="style4"><div align="center"><?php echo $boys[1]; ?></div></td>
            <td class="style4"><div align="center"><?php echo $boys[0]; ?></div></td>
          </tr>
            <tr>
    
              <td class="style4"><div align="center" class="style8"><?php echo $girls[10]; ?></div></td>
              <td class="style4"><div align="center" class="style8"><?php echo $girls[9]; ?></div></td>
           	<td class="style4"><div align="center" class="style8"><?php echo $girls[8]; ?></div></td>
          </tr>
          <tr>
          	
            <td class="style4"><div align="center" class="style8"><?php echo $girls[7]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $girls[6]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $girls[5]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $girls[4]; ?></div></td>
            </tr>
          </table>
      </div></td>
    <td width="17"><div align="center"></div></td>
    <td width="300"><p align="center">&nbsp;</p>
      <div align="center">
        <table width="300" height="139" border="1" align="center">
			<tr>
            <td class="style4"><div align="center"><?php echo $boys[27]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[26]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[25]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[24]; ?></div></td>
 		   </tr>
          <tr>
            <td class="style4"><div align="center"><?php echo $boys[23]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[22]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[21]; ?></div></td>
 		    <td class="style4"><div align="center"><?php echo $boys[20]; ?></div></td>
 		   </tr>
          <tr>
          
            <td class="style4"><div align="center" class="style8"><?php echo $boys[44]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[43]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[42]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[41]; ?></div></td>
            
          </tr>
          <tr>
          	<td class="style4"><div align="center" class="style8"><?php echo $boys[40]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[39]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[38]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[37]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[36]; ?></div></td>
          </tr>
          <tr>
            
            <td class="style4"><div align="center" class="style8"><?php echo $boys[35]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[34]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[33]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[32]; ?></div></td>
          </tr>
          <tr>
            
            <td class="style4"><div align="center" class="style8"><?php echo $boys[31]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[30]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[29]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $boys[28]; ?></div></td>
          </tr>
          <tr>
               <td class="style4"><div align="center" class="style8"><?php echo $girls[13]; ?></div></td>
              <td class="style4"><div align="center" class="style8"><?php echo $girls[12]; ?></div></td>
              <td class="style4"><div align="center" class="style8"><?php echo $girls[11]; ?></div></td>
          </tr>
        
          <tr>
          	
            <td class="style4"><div align="center" class="style8"><?php echo $girls[3]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $girls[2]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $girls[1]; ?></div></td>
            <td class="style4"><div align="center" class="style8"><?php echo $girls[0]; ?></div></td>
            </tr>
          </table>
      </div>      <div align="center" class="style4"></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="200" border="2" align="center">
      <tr>
        <td align="center" valign="middle" class="style4"><form id="form1" name="form1" method="post" action="">
         
            <div align="center">
              <input type="submit" value="SHUFFLE" name ="submit" id="Submit" width=100% />
            </div>
        </form>        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">copyright@GHSS Ayaparampu</div></td>
  </tr>
</table>
</div>
</body>
</html>
