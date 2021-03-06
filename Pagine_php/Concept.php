<!DOCTYPE.html>
<?php
	//Avvia la sessione
	session_start();
	//Controllo se l'utente è loggato
	if(!isset($_SESSION['utente'])){
		//Vai al login
		header("Location: Login.php");
		exit;
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sogno Italiano - Concept</title>
		<link rel="stylesheet" href= "../Fogli_di_stile/Concept.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../Script_javascript/scriptConcept.js" defer> </script>
	</head>
	
	<body>
		<header>
			<h1>La nostra azienda</h1>
		</header>
		
		<nav>
			<!--Menù a tendina per gli elementi in pagina-->
				<div id="hormenu"><!-- div che contiene il menu -->
					<ul> <!-- lista principale: definisce il menu nella sua interezza -->
					<li>
						<a href="#"><img src= "../Immagini/search_white.png" /></a> <!-- primo list-item, prima voce del menu -->
					<ul> <!-- Lista annidata: voci del sotto-menu -->
						<li><a href="#rete">La rete</a></li>
						<li><a href="#negozi">I nostri negozi</a></li>
						<li><a href="#sviluppo">Lo sviluppo</a></li>
						<li><a href="#saluti">Vieni a trovarci</a></li>
					</ul> <!-- Fine del sotto-menu -->
					</li> <!-- Chiudo il list-item -->
					<!--qui altri list-item -->
					</div>
				<!--Fine menù a tendina-->
			<a href="Home.php">Home</a>
			<a href="Login.php">Login</a>
			<a href="Logout.php">Logout</a><!---->
		</nav>
		
		<div id='Profilo'>
			<h2>Francesco Catania</h2>
		</div>
		
		<section></section>
		
		<blockquote>
			<p></p>
			<h3></h3>
		</blockquote>
		
		<section></section>
		
		<blockquote>
			<p></p>
			<h3></h3>
		</blockquote>
		
		
		<article>
			<h2 id = 'rete'>La Rete</h2>
			<p>			
				La rete vendita è suddivisa in quattro format:
				<ol>
					<li><span>Kids</span>: ideato per le <strong>superfici più piccole</strong> ed interamente dedicato ai bambini. Le performance medie di fatturato si attestano sui 3.000/3.500 €/mq.</li>
					<li><span>Fashion</span>: si tratta di negozi rivolti ad un <strong>pubblico giovane</strong> ed attento ai trend. L’offerta è mirata a prodotti Uomo e Donna, con punti vendita sviluppati su 300/400 mq. Le performance medie di fatturato si attestano sui 4.000/5.000 €/mq.</li>
					<li><span>Store</span>: sviluppati su superfici tra i 500 e i 1.000 mq, sono rivolti prevalentemente ad un target di giovani famiglie. Anche in questi punti vendita si pone grande attenzione al <strong>contenuto moda</strong>, con un’offerta estesa al prodotto Bambino, alle Calzature e agli accessori. Le performance medie di fatturato si attestano sui 3.500/4.000 €/mq. Gli Store ed i Fashion sono concepiti con un lay-out circolare: a destra il mondo Donna, a sinistra il reparto Uomo, nella parte centrale del negozio il settore Bambino.</li>
					<li><span>Megastore</span>: sono punti vendita con un’<strong>estensione massima</strong> sviluppata su metrature oltre i 1.500 mq. L’offerta prevede oltre 3.000 articoli con inserimenti di prodotto costruiti ad hoc, per una proposta moda completa e sempre aggiornata. Le performance medie di fatturato si attestano sui 3.000/3.500 €/mq. Il concept è quello dello “shop in the shop”.</li>
				</ol>
			</p>
		</article>
		
		<section></section>
		
		<blockquote>
			<p></p>
			<h3></h3>
		</blockquote>
		
		<section></section>
		
		<blockquote>
			<p></p>
			<h3></h3>
		</blockquote>
		
		<article>
			<h2 id = 'negozi'>I Negozi</h2>
			<p>
			L’allestimento dei punti vendita è curato da un <strong>team di visual ed architetti interni</strong>, 
			aggiornato settimanalmente e adeguato alle esigenze del cliente e del territorio di riferimento. 
			La scelta delle location Sogno Italiano è concentrata su punti di interesse strategico, preferibilmente nei <strong>centri cittadini</strong>
			o all’interno di importanti centri commerciali. Il design delle filiali è <strong>contemporaneo</strong>; 
			le strutture espositive sono studiate per aumentare la visibilità del prodotto e garantirne la migliore presentazione 
			possibile. Ogni ambiente si avvale, inoltre, della scelta di materiali speciali e della ricchezza espressiva delle 
			campagne di comunicazione del brand, esposte in immagini in grande formato.
			</p>
			
			<h2 id = 'sviluppo'>Lo Sviluppo</h2>
			<p>
			Sogno Italiano è impegnata a sviluppare i quattro format della propria rete vendita, sia diretta che in partnership 
			attraverso la formula franchising. Per i negozi a <strong>gestione diretta</strong> si privilegiano location oltre i 700 mq che permettono di 
			esprimere tutta la potenzialità dell’offerta del brand. Nello specifico, l’Azienda ha intrapreso l’apertura di nuovi negozi 
			nei centri storici e nei centri commerciali che abbiano un ipermercato ed una galleria di almeno 25 negozi, con un bacino 
			di utenza minimo di <strong>70.000 unità</strong>. I negozi in franchising interessano superfici comprese tra i 300 e i 1.200 mq, 
			con bacini d’utenza pari o superiori a 20.000 abitanti. Questo assicura al franchising le stesse performance della rete 
			diretta. Sogno Italiano supporta i propri partner dalla fase di progettazione fino all’apertura, inoltre garantisce una 
			<strong>costante assistenza</strong>, sia riguardo al visual che all’aspetto gestionale.
			</p>
		</article>
		
		<section></section>
		
		<blockquote>
			<p></p>
			<h3></h3>
		</blockquote>

		<section></section>
		
		<blockquote>
			<p></p>
			<h3></h3>
		</blockquote>
		
		
		<div id="saluti">
		_______________________________________________
			<h2>A presto!</h2>
		
		</div>
		
		<footer>
			<a href= "http://www.dieei.unict.it/corsi/l-8-inf"><img src="../Immagini/logoUNICT.jpg"/></a>
			<p>Francesco Catania O46002194, Corso di Web Programming, Ingegneria Informatica</p>
			<a href= "https://github.com/FrancescoCt"><img id='accountGithub' src="../Immagini/Github-Mark-32px.png"/></a>
		</footer>
	</body>
</html>