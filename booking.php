<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include('navbar.php'); ?>
<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>BOOKING ROOM</title>
<link href="jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<!--<script src="lang/datepicker-fi.js"></script>-->
<script>
    $(function() {
	<!--$.datepicker.setDefaults($.datepicker.regional['fi']);-->
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
	  regional: "fi",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  }); </script>

</head>
<style> 
.button {
width: 100%;
padding: 2%;
background-color: #cc0000;
color: #fff;
border: 0px;
text-transform: uppercase;
}

</style>

<body background="web3.jpg">

<h1 align="center">Let's start booking !</h1>
<table bgcolor= "#ffe6ff" align="center" border="3" cellpadding="5" width="650">
	<tr>
		<td valign="top">
		<form action="book.php" method="post">
			<h3 align="center">MAKE BOOKING</h3>
			<?php include('profile.php'); ?>
			<!--<p><input checked="checked" name="item" type="radio" value="Meeting room" />Meeting room 
			| <input name="item" type="radio" value="Swimming pool" />Swimming pool 
			| <input name="item" type="radio" value="Drill" />Drill | 
			<input name="item" type="radio" value="Tennis court" />Tennis court</p>-->
			<table style="width: 70%">
				<tr>
					<td>Title:</td>
					<td> <input maxlength=255 name="name" required="" type="text" /></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					
					<td>Room:</td>
					<td> <select name="item">
					<option value="Meeting Room1 " selected="selected">Meeting Room 1</option>
					<option value="Meeting Room 2">Meeting Room 2</option>
					<option value="Disscusion Room 1">Disscusion Room 1</option>
					<option value="Disscusion Room 2">Disscusion Room 2</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Reservation time:</td>
					<td>
			<input id="from" name="start_day" required="" type="text" /></td>
					<td>-</td>
					<td><input id="to" name="end_day" required="" type="text" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td> <select name="start_hour">
			<option selected="selected">00</option>
			<option>01</option>
			<option>02</option>
			<option>03</option>
			<option>04</option>
			<option>05</option>
			<option>06</option>
			<option>07</option>
			<option>08</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			</select>:<select name="start_minute">
			<option selected="selected">00</option>
			<option>30</option>
			</select></td>
					<td>&nbsp;</td>
					<td><select name="end_hour">
			<option>00</option>
			<option>01</option>
			<option>02</option>
			<option>03</option>
			<option>04</option>
			<option>05</option>
			<option>06</option>
			<option>07</option>
			<option>08</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option selected="selected">23</option>
			</select>:<select name="end_minute">
			<option>00</option>
			<option selected="selected">30</option>
			</select></td>
				</tr>
			</table>
			<p><input checked="checked" name="phone" type="checkbox" value="Mineral Water" />Mineral Water 
			| <input name="phone" type="checkbox" value="Laptop" />Laptop
			| <input name="phone" type="checkbox" value="Both" />Both [Mineral Water & Laptop] </p>
			
			<p>
			<input name="book" class="button" type="submit" value="Book" />
		</form>
		</td>
	</tr>
</table>
</body>

</html>
