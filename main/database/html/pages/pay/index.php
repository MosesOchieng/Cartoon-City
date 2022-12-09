<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Smartphone payment application  | CSS + JS | working + sounds</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<input type="radio" name="tab" id="terminal" value="terminal" class="hidden radio1" checked />
<input type="radio" name="tab" id="payment" value="payment" class="hidden radio2" />
<input type="radio" name="tab" id="settings" value="settings" class="hidden radio3" />
<input type="radio" name="tab" id="topayment" value="topayment" class="hidden radio4" />
<div class="content">
	<div class="phone">
		<div class="border">
			<span class="volume up"></span>
			<span class="volume down"></span>
			<span class="camera">
				<span class="lens"></span>
			</span>
			<span class="detectors">
				<span class="light"></span>
				<span class="motion"></span>
			</span>
			<span class="speaker"></span>
			<span class="logo"></span>
			<div class="screen">
        <div class="volumebar">
          <div>
            <div>
              <p>Sound</p>
              <span class="expandsound"></span>
            </div>
            <div>
              <span class="soundicon sound"></span>
              <input type="range" min="0" max="12" value="2" class="volumeslider s" />
            </div>
          </div>
          <div class="moresound">
            <div>
              <p>Notifications</p>
            </div>
            <div>
              <span class="soundicon notification"></span>
              <input type="range" min="0" max="12" value="9" class="volumeslider n" />
            </div>
            <div>
              <p>Touching sound</p>
            </div>
            <div>
              <span class="soundicon touch"></span>
              <input type="range" min="0" max="12" value="7" class="volumeslider t" />
            </div>
            <div>
              <p>Music, movies, games, multimedia</p>
            </div>
            <div>
              <span class="soundicon music"></span>
              <input type="range" min="0" max="12" value="5" class="volumeslider m" />
            </div>
          </div>
        </div>
				<div class="statusbar">
					<span class="icon i1"></span>
					<span class="icon i2"></span>
					<span class="icon i3"></span>
          <div class="statusright">
            <span class="icon nfc"></span>
            <span class="icon wifi"></span>
            <span class="icon coverage"></span>
            <span class="procent">97%</span>
            <span class="icon battery"></span>
            <span class="time">11:34</span>
          </div>
				</div>
				<div class="application">
					<div class="terminal-content">
            <div class="currency">
              <p id="$">$ USD</p>
              <p id="€">€ EUR</p>
              <p id="zł">zł PLN</p>
              <p id="£">£ GBP</p>
              <p id="₿">₿ BTC</p>
              <p id="¥">¥ JPY</p>
            </div>
						<div class="amount">
							<p>€</p>
							231,43
						</div>
						<div class="keyboard">
							<div>
								<p>1</p>
								<p>4</p>
								<p>7</p>
								<p>,</p>
								<p class="cancel"></p>
							</div>
							<div>
								<p>2</p>
								<p>5</p>
								<p>8</p>
								<p>0</p>
								<p class="undo"></p>
							</div>
							<div>
								<p>3</p>
								<p>6</p>
								<p>9</p>
								<p class="backspace"></p>
								<p class="accept"></p>
							</div>
						</div>
					</div>
					<div class="payment-content">
						<p class="no-payment">No incoming payments</p>
						<p>Place the phone near terminal</p>
						<span class="money"></span>
					</div>
					<div class="to-payment-content">
						<p class="no-payment">Incoming payment</p>
						<p>Do you confirm incoming payment?</p>
						<p>
							Zgraj się
							<br />
							Shopping
							<br />
							2,38 €
							<div class="to-payment">
                <label for="payment">
                  <p class="reject"></p>
                </label>
								<label for="payment">
                  <p class="okay"></p>
                </label>
							</div>
						</p>
					</div>
					<div class="settings-content">
						<input type="checkbox" id="card" name="card" class="hidden checkbox1" />
						<input type="checkbox" id="pin" name="pin" class="hidden checkbox2" />
						<input type="checkbox" id="amount" name="amount" class="hidden checkbox3" />
						<input type="checkbox" id="limit" name="limit" class="hidden checkbox4" />
						<div class="new">
							<div class="newcard">
								<p>Choose a card to pay with</p>
								<input type="radio" id="card1" name="cards" class="hidden card1" checked />
										<input type="radio" id="card2" name="cards" class="hidden card2" />
										<label for="card1" class="card1l label"><span></span><p>1234-1234-1234-1234</p></label>
										<br />
										<label for="card2" class="card2l label"><span></span><p>0000-0000-0000-0000</p></label>
										<label for="card">
											<p class="confirm">Zatwierdź</p>
										</label>
							</div>
							<div class="newpin">
								<p>Enter a new PIN</p>
								<input type="password" maxlength="4" />
								<label for="pin">
									<p class="confirm">Confirm</p>
								</label>
							</div>
							<div class="newamount">
								<p>Enter amount to pay without confirmation</p>
								<div>
									<input type="number" min="1" max="10000" value="100" />
									<span>€</span>
								</div>
								<label for="amount">
									<p class="confirm">Confirm</p>
								</label>
							</div>
							<div class="newlimit">
								<p>Enter a new payment count limit</p>
								<input type="number" min="1" max="3000" value="3" />
								<label for="limit">
									<p class="confirm">Confirm</p>
								</label>
							</div>
						</div>
						<label for="card">
							<div class="set">
								<span class="ico creditcard"></span>
								<p>Choose a card to use</p>
							</div>
						</label>
						<label for="pin">
							<div class="set">
								<span class="ico pincode"></span>
								<p>Change your PIN code</p>
							</div>
						</label>
						<label for="amount">
							<div class="set">
								<span class="ico money"></span>
								<p>Amount without confirmation</p>
							</div>
						</label>
						<label for="limit">
							<div class="set">
								<span class="ico limit"></span>
								<p>Payment count limit</p>
							</div>
						</label>
					</div>
					<div class="menu">
						<label for="terminal">
							<div class="menuitem terminal">
								<div>
									<span></span>
									<p>Terminal</p>
								</div>
							</div>
						</label>
						<span class="divider"></span>
						<label for="payment">
						<div class="menuitem payment">
							<div>
								<span></span>
								<p>Payment</p>
							</div>
						</div>
						</label>
						<span class="divider"></span>
						<label for="settings">
							<div class="menuitem settings">
								<div>
									<span></span>
									<p>Settings</p>
								</div>
							</div>
						</label>
					</div>
				</div>
				<div class="navigation">
					<span class="back"></span>
					<span class="home"></span>
					<span class="opened"></span>
				</div>
			</div>
			<label for="topayment">
				<span class="logo"></class>
			</label>
		</div>
	</div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
