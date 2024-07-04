
<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Legends Top Up</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="mobile-legends-topup">
		<div class="header">
			<img src="mobile-legends-logo.png" alt="Mobile Legends Logo">
			<h2>TOP UP DIAMOND MOBILE LEGEND</h2>
		</div>
		<div class="content">
			<div class="character">
				<img src="character-1.png" alt="Character 1">
			</div>
			<div class="character">
				<img src="character-2.png" alt="Character 2">
			</div>
			<div class="info">
				<p>Proses cepat 3 detik setelah pembayaran</p>
				<p>Open 24 hours</p>
			</div>
			<div class="steps">
				<ol>
					<li>Masukkan ID + (server)</li>
					<li>Pilih nominal diamond</li>
					<li>Pilih metode pembayaran</li>
					<li>Masukkan nomor Whatsapp dengan benar!</li>
				</ol>
			</div>
			<div class="whatsapp">
				<img src="whatsapp-icon.png" alt="WhatsApp Icon">
			</div>
			<div class="form">
				<h3>Masukkan User ID dan Zone ID</h3>
				<input type="text" placeholder="User ID" id="user-id">
				<input type="text" placeholder="Zone ID" id="zone-id">
				<button>Masukkan</button>
			</div>
			<div class="payment-methods">
				<h3>Pilih Metode Pembayaran</h3>
				<ul>
					<li>
						<input type="radio" id="qris" name="payment-method">
						<label for="qris">QRIS</label>
					</li>
					<li>
						<input type="radio" id="ewallet" name="payment-method">
						<label for="ewallet">E-Wallet (gopay, DANA, OVO, LinkAja)</label>
					</li>
					<li>
						<input type="radio" id="virtual-account" name="payment-method">
						<label for="virtual-account">Virtual Account (BCA, PermataBank, Bank BRI, Mandiri)</label>
					</li>
					<li>
						<input type="radio" id="convenience-store" name="payment-method">
						<label for="convenience-store">Convenience Store (Alfamart, Alfamidi)</label>
					</li>
				</ul>
				<input type="text" placeholder="Masukkan promo code (optional)" id="promo-code">
				<button>Confirm Top Up</button>
			</div>
		</div>
	</div>

	<script