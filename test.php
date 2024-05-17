<?php session_start(); ?>
<script>


		function sortHighest(element1) {
		let score1 = 0;
		if($(element1).attr('src').indexOf('ace') > 1 ) {
			score1 = 14;
		}
		else if($(element1).attr('src').indexOf('king') > 1 ) {
			score1 = 13;
		}
		else if($(element1).attr('src').indexOf('queen') > 1 ) {
			score1 = 12;
		}
		else if($(element1).attr('src').indexOf('jack') > 1 ) {
			score1 = 11;
		}
		else if($(element1).attr('src').indexOf('red') > 1 ) {
			score1 = 15;
		}
		else if($(element1).attr('src').indexOf('black') > 1 ) {
			score1 = 15;
		}
		else if($(element1).attr('src').indexOf('10') > 1) {
			score1 = 10;
		}
		else if($(element1).attr('src').indexOf('9') > 1) {
			score1 = 9;
		}
		else if($(element1).attr('src').indexOf('8') > 1) {
			score1 = 8;
		}
		else if($(element1).attr('src').indexOf('7') > 1) {
			score1 = 7;
		}
		else if($(element1).attr('src').indexOf('6') > 1) {
			score1 =  6;
		}
		else if($(element1).attr('src').indexOf('5') > 1) {
			score1 = 5;
		}
		else if($(element1).attr('src').indexOf('4') > 1) {
			score1 = 4;
		}
		else if($(element1).attr('src').indexOf('3') > 1) {
			score1 = 3;
		}
		else if($(element1).attr('src').indexOf('2') > 1) {
			score1 = 2;
		}
		else { 
		console.log('unknown card');
			
		}
		
		return score1;
	}
	
	function sortTimes(score1,score2) {
		let times1 = 0;
		let times2 = 0;
		let times = [];
		if(score1 == 14) {
			if(score2 == 3) {
				times2 = 3;
				times1 = 1;
			}
			else {
				times1 = 3;
			}
		}
		else if(score2 == 14) {
			if(score1 == 3) {
				times1 = 3;
				times2 = 1;
			}
			else {
				times2 = 3;
			}
		}
		else if(score1 == 13) {
			if(score2 == 4) {
				times2 = 2;
				times1 = 1;
			}
			else {
				times1 = 2;
			}
				
		}
		else if(score2 == 13) {
			if(score1 == 4) {
				times1 = 2;
				times2 = 1;
			}
			else {
				times2 = 2;
			}
		}
		else if(score1 == 12) {
			if(score2 == 5) {
				times2 = 2;
				times1 = 1;
			}
			else {
				times1 = 2;
			}
		}
		else if(score2 == 12) {
			if(score1 == 5) {
				times1 = 2;
				times2 = 1;
			}
			else {
				times2 = 2;
			}
		}
		else if(score1 == 11) {
			if(score2 == 6) {
				times2 = 2;
				times1 = 1;
			}
			else {
				times1 = 2;
			}
		}
		else if(score2 == 11) {
			if(score1 == 6) {
				times1 = 2;
				times2 = 1;
			}
			else {
				times2 = 2;
			}
		}
		else if(score1 == 15) {
			if(score2 == 2) {
				times2 = 5;
				times1 = 1;
			}
			else {
				times1 = 5;
			}
		}
		else if(score2 == 15) {
			if(score1 == 2) {
				times1 = 5;
				times2 = 1;
			}
			else {
				times2 = 5;
			}
		}
		else {
			times1 = 1;
			times2 = 1;
		}
		times = [times1, times2];
		
		return times;
	}
	
	function compare(element1, element2) {
		if(!($(element1).attr('src')) || !($(element2).attr('src')))  
		{
			return false;
		}
		
	else if($(element1).attr('src').indexOf( 'clubs') >  1 && $(element2).attr('src').indexOf( 'clubs') > 1)  {
		return true;
	}
	else if($(element1).attr('src').indexOf( 'diamonds') >  1 && $(element2).attr('src').indexOf( 'diamonds') > 1)  {
		return true;
	}
	else if($(element1).attr('src').indexOf( 'spades') >  1 && $(element2).attr('src').indexOf( 'spades') > 1)  {
		return true;
	}
	else if($(element1).attr('src').indexOf( 'hearts') >  1 && $(element2).attr('src').indexOf( 'hearts') > 1)  {
		return true;
	}
	else if($(element1).attr('src').indexOf( 'black') >  1 && $(element2).attr('src').indexOf( 'black') > 1)  {
		return true;
	}
	else if($(element1).attr('src').indexOf( 'red') >  1 && $(element2).attr('src').indexOf( 'red') > 1)  {
		return true;
	}
	else {
		return false;
	}
	}
	
	function swap(element1, element2) {
			
			element3 = element1.attr('src');
		

        $(element1).attr('src',$(element2).attr('src'));
	
        $(element2).attr('src',element3);
	
		
	}
	function comparing() {
		if(compare($('.cards1'), $('.cards2'))) {
			if(compare($('.cards2'), $('.cards3'))) {
				if(compare($('.cards2'), $('.cards4'))) {
					setTimeout(function () { swap($('.cards2'),$('.cards5'))}, 1000);
					
				}
				else if(compare($('.cards2'), $('.cards5'))) {
						setTimeout(function () { swap($('.cards2'),$('.cards4'))}, 1000);
					}
					else {
						setTimeout(function () { swap($('.cards2'),$('.cards5'))}, 1000);
					}
			}	
			else if(compare($('.cards1'), $('.cards3'))) {
				if(compare($('.cards1'), $('.cards4'))) {
					setTimeout(function () { swap($('.cards1'),$('.cards5')) }, 1000);
					
				}
				else if(compare($('.cards1'), $('.cards5'))) {
						setTimeout(function () { swap($('.cards1'),$('.cards4'))}, 1000);
					}
					else {
						setTimeout(function () { swap($('.cards1'),$('.cards5'))}, 1000);
					}
				}
				
			else {

				setTimeout(function () { swap($('.cards1'),$('.cards3'))}, 1000);
			}
		}
	}
	
	function whoWon(score1, score2, times) {
		
		
		let value3 = 0; let value4 = 0;
		let value5 = 0; let value6 = 0;
		if( $('#data1').text() > 0 && $('#data2').text() > 0)
		{
			times[0] = parseInt($('#data1').text());	
			times[1] = parseInt($('#data2').text());
		}
		else if($('#data1').text() > 0) {
			
			times[0] = parseInt($('#data1').text());
			//	console.log(times);
		
		}
		else if($('#data2').text() > 0 ) {
		
			times[1] = parseInt($('#data2').text());			
			//console.log(times);
		
		}
	    else {
			times = sortTimes(score1,score2)
		
		}
		choice = $('.choice').text();
		
			value4 = 0.5;
			value5 = $('#attackDmg').text();
			value7 = $('.att1').text();
			value8 = $('.att2').text();
			
		
	
			
				
		
		
		
		var chance = Math.random(0,1);
		if(times[0] > times[1]) { console.log('test1');
			  $(".cards1").effect( "shake", {distance:150, direction:'right', times:4}, 1000  );
			if(chance >= 0.5) {
				$('.msg').text('RAAK!');console.log('test2');
				if(choice == 'links') {
				value2 = value8 - value5;
				}
				else  {
					value2 = value8 - value4;
				}
				
				$('.att2').html(value2);
				if(value2 <= 0) {
					swap($('.cards2'),$('.cards3'));
					$('.att2').html($('.country2').text());
					if($('.cards4').length) {
					swap($('.cards3'),$('.cards4'));
				
					}
					else if($('.cards5').length) {
					swap($('.cards4'),$('.cards5'));
				
					}
					
					
					comparing();
							
					if($('.cards4').length) {
						
					$('.cards4').remove();
					
					}
					else if($('.cards5').length) {
							$('.cards5').remove();
							
					}
					else {
							$('.cards3').remove();
						
					}
					setInit();
	
			
					
				}
				
			}
			else {
				$('.msg').text('MIS!');
			}
			times[0]--;
			$('#data1').text(times[0]);
		} 
		else if (times[1] > times[0]) {console.log('test3');
			   $(".cards2").effect( "shake", {distance:150, direction:'left', times:4}, 1000 );
		if(chance >= 0.5) {
			$('.msg').text('RAAK!'); console.log('test4');
				if(choice == 'rechts') {
				value1 = value7 - value5;
				}
				else {
					value1 = value7 - value4;
				}
			
				
			
				$('.att1').html(value1);
				if(value1 <= 0) {
					
					swap($('.cards1'),$('.cards3'))
					$('.att1').html($('.country2').text());
				
					if($('.cards4').length) {
					swap($('.cards3'),$('.cards4'));
				
					}
					else if($('.cards5').length) {
					swap($('.cards4'),$('.cards5'));
				
					}
					
					
					comparing();
			
					if($('.cards4').length) {
						
					$('.cards4').remove();
					
					}
					else if($('.cards5').length) {
							$('.cards5').remove();
							
					}
					else {
							$('.cards3').remove();
							
					}
					setInit();
				}
					
			
			}	
			else {
				$('.msg').text('MIS!');
			}
			times[1]--;
			$('#data2').text(times[1]);
		}
		else if(score1 >= score2) {
          $(".cards1").effect( "shake", {distance:150, direction:'right', times:4}, 1000  );
			if(chance >= 0.5) {
				$('.msg').text('RAAK!');
		
					if(choice == 'links') {
				value2 = value8 - value5;
				}
				else  {
					value2 = value8 - value4;
				}
				
				
				$('.att2').html(value2);
				if(value2 <= 0) {
					swap($('.cards2'),$('.cards3'));
					$('.att2').html($('.country2').text());
					if($('.cards4').length) {
					swap($('.cards3'),$('.cards4'));
				
					}
					else if($('.cards5').length) {
					swap($('.cards4'),$('.cards5'));
				
					}
					
					
					comparing();
							
					if($('.cards4').length) {
						
					$('.cards4').remove();
					
					}
					else if($('.cards5').length) {
							$('.cards5').remove();
							
					}
					else {
							$('.cards3').remove();
				
					}
						
					setInit();
					times = sortTimes(score1, score2);
				}
				
			} else {
				$('.msg').text('MIS!');
			}
			times[0]--;
			$('#data1').text(times[0]);
			}
			else {
       
            $(".cards2").effect( "shake", {distance:150, direction:'left', times:4}, 1000 );
		if(chance >= 0.5) {
				
				if(choice == 'rechts') {
				value1 = value7 - value5;
				}
				else {
					value1 = value7 - value4;
				}
				
				$('.att1').html(value1);
				if(value1 <= 0) {
					swap($('.cards1'),$('.cards3'))
					$('.att1').html($('.country2').text());
				
					if($('.cards4').length) {
					swap($('.cards3'),$('.cards4'));
				
					}
					else if($('.cards5').length) {
					swap($('.cards4'),$('.cards5'));
				
					}
					
					
					comparing();
			
					if($('.cards4').length) {
						
					$('.cards4').remove();
				
					}
					else if($('.cards5').length) {
							$('.cards5').remove();
						
					}
					else {
							$('.cards3').remove();
							
					}
					setInit();
					times = sortTimes(score1, score2);
				}
			
			}	else {
				$('.msg').text('MIS!');
			}
			times[1]--;
			$('#data2').text(times[1]);
			}
		
	  return times;
	}
	
	function setInit() {
		
		console.log($('.country0').text(), $('.country1').text());
		console.log($('.country2').text(), $('.country3').text());
	
		console.log($('.country4').text());
		if($('.country0').text() != 0  && $('.country1').text() != 0) {
		value1 = $('.country0').text(); 
		value2 = $('.country1').text(); 
		$('.country0').remove();
		$('.country1').remove();
		}
		else if($('.country3').text() != 0  && $('.country4').text() != 0 ) {
		value1 = $('.country3').text(); 
		value2 = $('.country4').text(); 
		$('.country3').remove();
		$('.country4').remove();
		}
		else if($('.country2').text() != 0) {
		if($('.att1').text != 0) {
			value1 = $('.att1').text()
			value2 = $('.country2').text(); 
		}
		else  {
			value1= $('.country2').text();
			value2 = $('.att2').text();
		}
		$('.country2').remove();
		
		}
		
		$('.att1').remove();
			$('.att2').remove();
			$('div.output').append("<span class='att1'>"+value1+"</span>","<span class='att2'>"+value2+"</span>");
				$('div.output>.att2').insertAfter($('.xr_ar')).css({ 'position': 'absolute', 'left' : '565px', 'top' : '525px'});
				$('div.output>.att1').insertAfter($('.xr_ar')).css({ 'position': 'absolute', 'left' : '315px', 'top' : '525px'});
console.log(value1, value2);	
	return values = [value1, value2];
	}
	
	$('.leftc').replaceWith($('.cards1'));
	$('.cards1').css({ 'position' : 'absolute', 'left':'142px','top':'217px','width':'100px','height':'141px' ,'background-color': '#191919' });
	$('.country0').insertAfter('.cards1');

	$('.rightc').replaceWith($('.cards2'));
	$('.cards2').css({ 'position' : 'absolute', 'left':'689px','top':'218px','width':'100px','height':'141px' ,'background-color': '#191919' });
	$('.country1').insertAfter('.cards2');

	$('.topc').replaceWith($('.cards3'));
	$('.cards3').css({ 'position' : 'absolute', 'left':'417px','top':'14px','width':'100px','height':'141px' ,'background-color': '#191919' });
	$('.country2').insertAfter('.cards3');

	$('.luc').replaceWith($('.cards5'));
	$('.cards5').css({ 'position' : 'absolute', 'left':'576px','top':'69px','width':'100px','height':'141px' ,'background-color': '#191919',
	'-o-transform': 'matrix(-0.694, 0.720, 0.720, 0.694, 0, 0)' , 
	'-webkit-transform' : 'matrix(-0.694, 0.720, 0.720, 0.694, 0, 0)' ,  
	'-ms-transform': 'matrix(-0.694, 0.720, 0.720, 0.694, 0, 0)' , 
	'transform' : 'matrix(-0.694,0.720 , 0.720, 0.694, 0, 0)' });
	$('.country3').insertAfter('.cards5');

	$('.ruc').replaceWith($('.cards4'));
	$('.cards4').css({ 'position' : 'absolute', 'left':'254px','top':'69px','width':'100px','height':'141px' ,'background-color': '#191919', 
	'-o-transform': 'matrix(0.694,0.720,0.720,-0.694,0,0)' , 
	'-webkit-transform' : 'matrix(0.694,0.720,0.720,-0.694,0,0)' ,  
	'-ms-transform': 'matrix(0.694,0.720,0.720,-0.694,0,0)' , 
	'transform' : 'matrix(0.694,0.720,0.720,-0.694,0,0)' });
	$('.country4').insertAfter('.cards4');
		
 
</script>

<?php
function makeCards() {
$suits = array('clubs','spades','hearts','diamonds');
for($i = 0, $x = 1; $x <= 5; $i++, $x++) {
	if(mt_rand(1,100) > 80)
	$chance = mt_rand(0,2);
	if(isset($chance))
	$jokers = ($chance == true && $chance === 1) ? "red_joker" : "black_joker";
	$i = mt_rand(0,12);
	$v = $i + 1;
	if($i == 0) $v = 2;
	if($i == 10) $v = "ace";
	if($i == 11) $v = 'king';
	if($i == 12) $v = 'queen';
	if(isset($jokers) && !is_numeric($jokers)) $q = $jokers;
	$chance = mt_rand(0,3);
	if(isset($q)) 
		echo "<img class='cards".$x."' width=76 height=140 src='index_htm_files/".$q.".png'></img>";
	else 	
		echo "<img class='cards".$x."' width=76 height=140 src='index_htm_files/".$v ."_of_". $suits[$chance].".png'></img>";
	$cards[] = (isset($q)) ? $q : $v ."_of_". $suits[$chance];
	unset($chance);
	unset($jokers);
	unset($q);
}
return $cards;
}
class Country {
	public $cardsK = array();
	public $cardsD = array();
	public $cardsS = array();
	public $cardsH = array();
	public $cardsR = array();
	public $cardsB = array();
	public $db;
	
	function __construct($cards) {
	
		foreach($cards as $value) {
			switch($value) {
				case str_contains($value,'clubs') : $this->cardsK[] = $value; break;
				case str_contains($value,'diamonds') : $this->cardsD[] = $value; break;
				case str_contains($value,'spades') : $this->cardsS[] = $value; break;
				case str_contains($value,'hearts') : $this->cardsH[] = $value; break;
				case str_contains($value,'red') : $this->cardsR[] = $value; break;
				case str_contains($value,'black') : $this->cardsB[] = $value; break;
				
			}
		}
		
		if(isset($this->cardsL)) {
			
			//print_r($this->cardsL);
			
		}
		if(isset($this->cardsD)) {
			
			//print_r($this->cardsD);
			
		}
		if(isset($this->cardsS)) {
			
			//print_r($this->cardsS);
			
		}
		if(isset($this->cardsH)) {
			
			//print_r($this->cardsH);
			
		}
		if(isset($this->cardsR)) {
			
			//print_r($this->cardsR);
			
		}
		if(isset($this->cardsB)) {
			
			//print_r($this->cardsB);
			
		}
		echo "<div id='attackDmg' style='display: none'>0.5</div>";
		 echo "<div class='choice' style='display: none'>".$_POST['choice']."</div>";
	}
	function init($cards) {
		
	 self::__construct($cards);	
	}
	function makeDB() {
		
		for($i = 0; $i < 5; $i++) {
			echo "<span class='country".$i."'>".$this->db[][] = 0.5;
			echo "</span>";
		}
		
		
	}
	
	function farcry($lvl) {
		switch($lvl) {
			
			case 1 : 
		for($i = 0; $i < 5; $i++) {
			if($i != 2) {
			echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 0.5;
			}
			else {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 2.5;
			}
			echo "</span>";
		}
		break;
		case 2 : 
			for($i = 0; $i < 5; $i++) {
			if($i == 2) {
			echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 3.0;
			}
			elseif($i >= 3) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 1.5;
			}
			else {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 1.0;
			}
			echo "</span>";
			}
		break; 

		case 3 : 
			for($i = 0; $i < 5; $i++) {
			if($i == 2) {
			echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 4.5;
			}
			elseif($i >= 3) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 3.5;
			}
			else {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 1.5;
			}
			echo "</span>";
			}
		break; 
		
		case 4 : 
			for($i = 0; $i < 5; $i++) {
			if($i == 2) {
			echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 6.0;
			}
			elseif($i == 4) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 3.5;
			}
			elseif($i == 3) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 5.5;
			}
			elseif($i == 1) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 2.0;
			}
			else {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 2.5;
			}
			echo "</span>";
			}
		break; 
		
		case 5 : 
			for($i = 0; $i < 5; $i++) {
			if($i != 2) {
			echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 6.5;
			}
			elseif($i == 4) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 6.5;
			}
			elseif($i == 3) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 4.0;
			}
			elseif($i == 1) {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 7.0;
			}
			else {
				echo "<span class='country".$i."'>".$this->db[$i][$lvl-1] = 5.0;
			}
			echo "</span>";
			}
		break; 
		
		}
	}
}
if(isset($_POST['data'])) {
	$data = json_decode(stripslashes($_POST['data']));
	if(isset($_POST['data1']))
$data1 = json_decode(stripslashes($_POST['data1']));
	
	echo "<div id='data1' style='display: none'>".$data[0]."</div>"; 
	echo "<div id='data2' style='display: none'>".$data[1]."</div>"; 
	if(isset($data1) && $data1 == 'w') {

	$_SESSION['country']->init(makeCards());

	if(!isset($_SESSION['lvl'])) {
		$_SESSION['lvl'] = 1;
	}
	elseif($_SESSION['lvl'] >= 2) {
		$_SESSION['lvl'] = 1;
	}
	else 
		$_SESSION['lvl']++;
	$lvl = $_SESSION['lvl'];
	$_SESSION['country']->farcry($lvl); 
	}
	
}

 if(isset($_POST['choice'])) {
	 
	
	 
?>
<script>
$(document).ready(function() {
	$('#begin').toggle();

	
	 let times = []; let computer = 'l'; let player = 'l';
			let choice = $('.choice').text();
			let score1 = 0; let score2 = 0;
comparing();
	$('.form').submit( function(e) {
		
			score1 = sortHighest($('.cards1'));
			score2 = sortHighest($('.cards2'));
			

			times = whoWon(score1,score2, times);
		console.log("TEST:"+times);
	if(!($('.att1').length) && !($('.att2').length) || $('.att1').text() == 0 && $('.att2').text() == 0) {
				$('div.output').append("<span class='att1'>"+$('.country0').text()+"</span>","<span class='att2'>"+$('.country1').text()+"</span>");
				$('div.output>.att2').insertAfter($('.xr_ar')).css({ 'position': 'absolute', 'left' : '565px', 'top' : '525px'});
				$('div.output>.att1').insertAfter($('.xr_ar')).css({ 'position': 'absolute', 'left' : '315px', 'top' : '525px'});
	  
	}
	
		if($('.att2').text() == 0 || !($('.att2').length)) {
		
			if(choice  == 'links') {
			
				$('.msg').text('Jij WON');
				player = 'w';
			
			}
			else {
			computer = 'w';
			$('.msg').text('Links WON');
			}
			$('.cards1').remove();
			$('.cards2').remove();
				
		$('.att1').remove();
			$('.att2').remove();
			
		}
		else if($('.att1').text() == 0 || !($('.att1').length)) {
		
			if(choice  == 'rechts') {
				
				$('.msg').text('Jij WON');
					player = 'w';
			}
			else {
			
			$('.msg').text('Rechts WON');
			computer = 'w';
			}
			$('.cards1').remove();
			$('.cards2').remove();
		
		$('.att1').remove();
			$('.att2').remove();
	
	}
	
		$.ajax({
			type : 'POST', 
			url: 'test.php', 
			dataType : 'html',
			data: { data : JSON.stringify(times), data1 : JSON.stringify(player) },
          
			success: function(result) {
				
			$('#data1').remove();
			$('#data2').remove();
			$('#verder').append(result);
			$('.eigenl').replaceWith($('.cards1'));
			$('.cards1').css({ 'position' : 'absolute', 'left':'286px','top':'359px','width':'100px','height':'141px' ,'background-color': '#191919' });
			$('.eigenr').replaceWith($('.cards2'));
			$('.cards2').css({ 'position' : 'absolute', 'left':'544px','top':'359px','width':'100px','height':'141px' ,'background-color': '#191919' });
		},
		complete: function(result) {   
			
		player = 'l';
		
		}	});
	
		return false;
	
		
	});
	
});
</script>
<?php

$_SESSION['country'] = new Country(makeCards());
$_SESSION['country']->makeDB();


}

?>
