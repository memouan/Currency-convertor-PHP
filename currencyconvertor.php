<html>
<head>
<style>
	#box
	{
        background: #D9CEC1;
		width:350px;
		height:270px;
		margin:0px auto;
		border:2px solid black;

	}
	h2{
		text-align: center;
	}
	table{
		
        margin:0px auto;
	}
</style>
</head>

<body>

<form align="center" action="currencyconvertor.php" method="post">

<div id="box">
<h2><center>Currency Converter</center></h2>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center>From:<select name='cur1'>
	 <option value="EUR">Euro(EUR)</option>
     <option value="GPB">Livre britannique(GPB)</option>
     <option value="CHF">Franc suisse(CHF)</option>
     <option value="RUB">Rouble russe(RUB)</option>
     <option value="CNY">Yuan chinois(CNY)</option>
     <option value="TRY">Livre turque(TRY)</option>
     <option value="TND">Dinar tunisien(TND)</option>
     <option value="MAD">Dirham marocain(MAD)</option>
     <option value="ALL">Lek albanais(ALL)</option>
     <option value="BEF">Franc belge(BEF)</option>
	 <option value="USD">US Dollar(USD)</option>
     <option value="INR">Indian Rupee(INR)</option>
	 <option value="JPY">Japanese Yen(JPY)</option>
	 <option value="PHP">Philippine Peso(PHP)</option>
	 </select>
</td>
</tr>
<tr>
	<td>
	<br><center>To:<select name='cur2'>
	 <option value="INR" selected >Indian Rupee(INR)</option>
	 <option value="EUR">Euro(EUR)</option>
     <option value="GPB">Livre britannique(GPB)</option>
     <option value="CHF">Franc suisse(CHF)</option>
     <option value="RUB">Rouble russe(RUB)</option>
     <option value="CNY">Yuan chinois(CNY)</option>
     <option value="TRY">Livre turque(TRY)</option>
     <option value="TND">Dinar tunisien(TND)</option>
     <option value="MAD">Dirham marocain(MAD)</option>
     <option value="ALL">Lek albanais(ALL)</option>
     <option value="BEF">Franc belge(BEF)</option>
	 <option value="USD">US Dollar(USD)</option>
	 <option value="JPY">Japanese Yen(JPY)</option>
	 <option value="PHP">Philippine Peso(PHP)</option>
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="CovertNow"></center>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

// Euro to ... //////////////////////////////////////////////
if($cur1=="EUR" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*82.678 . "</center>";
}

if($cur1=="EUR" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.86424 . "</center>";
}

if($cur1=="EUR" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*1.0018 . "</center>";
}

if($cur1=="EUR" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*57.071 . "</center>";
}

if($cur1=="EUR" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*7.0096 . "</center>";
}

if($cur1=="EUR" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*17.514 . "</center>";
}

if($cur1=="EUR" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*3.2239 . "</center>";
}

if($cur1=="EUR" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*10.520 . "</center>";
}

if($cur1=="EUR" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*118.24 . "</center>";
}

if($cur1=="EUR" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*40.340 . "</center>";
}

if($cur1=="EUR" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*1.0461 . "</center>";
}

if($cur1=="EUR" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*141.80 . "</center>";
}

if($cur1=="EUR" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*57.684 . "</center>";
}

if($cur1=="EUR" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

// US to ... //////////////////////////////////////////////
if($cur1=="USD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 109.49 . "</center>";
}

if($cur1=="USD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 67.83 . "</center>";
}

if($cur1=="USD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*49.32  . "</center>";
}

if($cur1=="USD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.8461 . "</center>";
}

if($cur1=="USD" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.624 . "</center>";
}

if($cur1=="USD" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.98 . "</center>";
}

if($cur1=="USD" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*44.8 . "</center>";
}

if($cur1=="USD" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*6.9 . "</center>";
}

if($cur1=="USD" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*15.8 . "</center>";
}

if($cur1=="USD" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*2.9 . "</center>";
}

if($cur1=="USD" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*8.9 . "</center>";
}

if($cur1=="USD" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*107.2 . "</center>";
}

if($cur1=="USD" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*36.2 . "</center>";
}

if($cur1=="USD" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

// JPY to ... //////////////////////////////////////////////

if($cur1=="JPY" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.01 . "</center>";
}

if($cur1=="JPY" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="JPY" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="JPY" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0059 . "</center>";
}

if($cur1=="JPY" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.01 . "</center>";
}

if($cur1=="JPY" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="JPY" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0069 . "</center>";
}

if($cur1=="JPY" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="JPY" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="JPY" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0089 . "</center>";
}

if($cur1=="JPY" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0107 . "</center>";
}

if($cur1=="JPY" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="JPY" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="JPY" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

// INR to ... //////////////////////////////////////////////
if($cur1=="INR" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="INR" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="INR" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0059 . "</center>";
}

if($cur1=="INR" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.01 . "</center>";
}

if($cur1=="INR" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="INR" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0069 . "</center>";
}

if($cur1=="INR" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="INR" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="INR" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0089 . "</center>";
}

if($cur1=="INR" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0107 . "</center>";
}

if($cur1=="INR" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="INR" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="INR" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="INR" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

// PHP to ... //////////////////////////////////////////////
if($cur1=="PHP" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="PHP" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0059 . "</center>";
}

if($cur1=="PHP" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.01 . "</center>";
}

if($cur1=="PHP" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="PHP" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0069 . "</center>";
}

if($cur1=="PHP" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="PHP" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="PHP" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0089 . "</center>";
}

if($cur1=="PHP" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0107 . "</center>";
}

if($cur1=="PHP" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="PHP" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="PHP" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="PHP" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="PHP" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}


// BEF to ... //////////////////////////////////////////////
if($cur1=="BEF" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="BEF" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="BEF" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="BEF" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0022 . "</center>";
}

if($cur1=="BEF" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="BEF" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="BEF" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="BEF" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="BEF" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0031 . "</center>";
}

if($cur1=="BEF" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

// ALL to ... //////////////////////////////////////////////
if($cur1=="ALL" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0107 . "</center>";
}

if($cur1=="ALL" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0059 . "</center>";
}

if($cur1=="ALL" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="ALL" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0044 . "</center>";
}

if($cur1=="ALL" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0069 . "</center>";
}

if($cur1=="ALL" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="ALL" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="ALL" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0059 . "</center>";
}

if($cur1=="ALL" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

if($cur1=="ALL" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0031 . "</center>";
}

if($cur1=="ALL" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="ALL" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

if($cur1=="ALL" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0081 . "</center>";
}

// GPB to ... //////////////////////////////////////////////
if($cur1=="GPB" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="GPB" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

if($cur1=="GPB" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="GPB" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0022 . "</center>";
}

if($cur1=="GPB" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="GPB" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="GPB" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="GPB" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="GPB" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0059 . "</center>";
}

if($cur1=="GPB" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="GPB" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="GPB" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="GPB" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="GPB" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

// CHF to ... //////////////////////////////////////////////
if($cur1=="CHF" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="CHF" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="CHF" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

if($cur1=="CHF" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0022 . "</center>";
}

if($cur1=="CHF" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="CHF" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="CHF" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="CHF" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="CHF" AND $cur2=="ALL"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0059 . "</center>";
}

if($cur1=="CHF" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="CHF" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="CHF" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="CHF" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="CHF" AND $cur2=="BEF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

// RUB to ... //////////////////////////////////////////////
if($cur1=="RUB" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="RUB" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="RUB" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0022 . "</center>";
}

if($cur1=="RUB" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

if($cur1=="RUB" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="RUB" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="RUB" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="RUB" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

// CNY to ... //////////////////////////////////////////////
if($cur1=="CNY" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="CNY" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="CNY" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="CNY" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0029 . "</center>";
}

if($cur1=="CNY" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

if($cur1=="CNY" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="CNY" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="CNY" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

// TRY to ... //////////////////////////////////////////////
if($cur1=="TRY" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="TRY" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="TRY" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="TRY" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="TRY" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="TRY" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

if($cur1=="TRY" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="TRY" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

// TND to ... //////////////////////////////////////////////
if($cur1=="TND" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="TND" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="TND" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="TND" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="TND" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="TND" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="TND" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}

if($cur1=="TND" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

// MAD to ... //////////////////////////////////////////////
if($cur1=="MAD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="MAD" AND $cur2=="GPB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0036 . "</center>";
}

if($cur1=="MAD" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="MAD" AND $cur2=="RUB"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="MAD" AND $cur2=="CNY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0027 . "</center>";
}

if($cur1=="MAD" AND $cur2=="TRY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0015 . "</center>";
}

if($cur1=="MAD" AND $cur2=="TND"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0017 . "</center>";
}

if($cur1=="MAD" AND $cur2=="MAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount . "</center>";
}
}

// ////////////////////////////////////////////////////////
// //


?>

</body>
</html>