<html>

	<head>

		<title>ANASAYFA</title>
		<link rel="stylesheet" href="style.css">
		
		
	</head>
	
	<body>
	
		<ul>
		
			<li>
			
				<a href="anasayfa.php"><b>Anasayfa</b></a>
			
			</li>
			
			<li>
			
				<a href="mentorler.php"><b>Mentörler</b></a>
			
			</li>
			
			<li>
			
				<a href="profilim.php"><b>Profilim</b></a>
			
			</li>
			
			<li style="float :right">
			
				<a href="index.php"><b class="active">Giriş Yap</b></a>
			
			</li>
		
		</ul>
		
		<br><br><br><br>
		
		<div class="panel" align="center">
		
			<div class="giris">
				
				<div class="baslik">Giris Yap</div>
				
					<form method="POST" action="girisform">
					
						<input type="email" placeholder="Mail" name="Mail">
						<input type="password" placeholder="Şifre" name="Sifre">
						<input type="submit" value="Giriş" class="button" >
					
					</form>
			
			</div>
			
			<div class="kayit" align="center">
				
				<div class="baslik">Kayıt Ol</div>
				
					<form>
					
						<input type="text" placeholder="İsim">
						<input type="text" placeholder="Soyisim">
						<input type="email" placeholder="Mail">
						<input type="password" placeholder="Şifre">
						<input type="password" placeholder="Şifre Tekrar">
						<input type="submit" value="Kayıt" class="button">
					
					</form>
			
			</div>
		
		</div>
		
	</body>

</html>
