<?
ob_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width">


<script type="text/javascript" src="jquery.js"></script>
<script>
var pomoc="";
var a;
var b;
var pyk=1;
var px;
var py;
var pionki= new Array();
var inklude;
var dalej;
var pyk2=1;
var pomjx;
var pomjy;
var dolprawy="9a9";
var dollewy="9a0";
var goraprawa="0a9";
var goralewa="0a0";
var k;
var m;
<?

$plik = fopen('pionki.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lista=explode("z",$tekst5);
foreach ($lista as $value){
	$i++;
	echo "pionki[".$i."]='".$value."';";
}
echo "inklude=".$i.";";
?>


function kurs(ttt){
statek = ttt;
$("#kursor").html(ttt);
$("#kursor").show();
$("#kursor").css("margin-left", event.pageX);
	$("#kursor").css("margin-top", event.pageY);
$(document).mousemove(function(event){
$("#kursor").html(ttt);
$("#kursor").show();
    $("#kursor").css("margin-left", event.pageX);
	$("#kursor").css("margin-top", event.pageY);

}); 
}
function check(a,b){
	if($('#ready').val()==1){
	//alert($("#k"+a+"a"+b).val());
	if(pyk==1){
		for (var i=1;i<=inklude;i++){
			if(pionki[i].charAt(2)==a && pionki[i].charAt(4)==b && pionki[i].charAt(6)=="p"){
				dalej=1;
		}
		}
		if(dalej==1){
	if ($("#k"+a+"a"+b).val()=="c"){
$("#"+a+"a"+b).html("");
kurs("<img src='czarny.png' width='50'>");
px=a;
py=b;
//alert("a="+a+" b="+b);
	}
	pyk++;
	}
}
	if(pyk==2){
	if($("#k"+a+"a"+b).val()!="c" && $("#k"+a+"a"+b).val()!="b" ){
			var poml=a+1;
			var poml2=a+2;
			var pomk=b+1;
			var pomk2=b+2;
			
			var pom2l=a-1;
			var pom2l2=a-2;
			var pom2k=b-1;
			var pom2k2=b-2;
			
			var pom3l=a-1;
			var pom3l2=a-2;
			var pom3k=b+1;
			var pom3k2=b+2;
			
			var pom4l=a+1;
			var pom4l2=a+2;
			var pom4k=b-1;
			var pom4k2=b-2;
		//
		for(var i=1;i<=inklude;i++){
			//alert(pionki[i].charAt(2));
	if(pionki[i].charAt(0)=="b" && (pionki[i].charAt(2)==px+1 && pionki[i].charAt(4)==py+1) && (px+2==a && py+2==b)){

			if (($("#k"+poml+"a"+pomk).val()=="b" && $("#k"+poml2+"a"+pomk2).val()=="x"  && $("#k"+poml2+"a"+pomk2).val()=="x")||( $("#k"+pom2l+"a"+pom2k).val()=="b" && $("#k"+pom2l2+"a"+pom2k2).val()=="x" && $("#k"+pom2l2+"a"+pom2k2).val()=="x")||($("#k"+pom3l+"a"+pom3k).val()=="b" && $("#k"+pom3l2+"a"+pom3k2).val()=="x" && $("#k"+pom3l2+"a"+pom3k2).val()=="x")||($("#k"+pom4l+"a"+pom4k).val()=="b" && $("#k"+pom4l2+"a"+pom4k2).val()=="x" && $("#k"+pom4l2+"a"+pom4k2).val()=="x") ){
			
			location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4)+"&reload=1";
			}else{
				
				
				location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4);
			}
		}
		//alert(pionki[i].charAt(2)+" "+pionki[i].charAt(4) +" "+px+" "+py+" "+a+" "+b);
		if(pionki[i].charAt(0)=="b" && (pionki[i].charAt(2)==px-1 && pionki[i].charAt(4)==py-1) && (px-2==a && py-2==b)){
		//alert("a");	
		if (($("#k"+poml+"a"+pomk).val()=="b" && $("#k"+poml2+"a"+pomk2).val()=="x"  && $("#k"+poml2+"a"+pomk2).val()=="x")||( $("#k"+pom2l+"a"+pom2k).val()=="b" && $("#k"+pom2l2+"a"+pom2k2).val()=="x" && $("#k"+pom2l2+"a"+pom2k2).val()=="x")||($("#k"+pom3l+"a"+pom3k).val()=="b" && $("#k"+pom3l2+"a"+pom3k2).val()=="x" && $("#k"+pom3l2+"a"+pom3k2).val()=="x")||($("#k"+pom4l+"a"+pom4k).val()=="b" && $("#k"+pom4l2+"a"+pom4k2).val()=="x" && $("#k"+pom4l2+"a"+pom4k2).val()=="x") ){
			
	location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4)+"&reload=1";
		}else{
			
			
		location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4);	
		}
		
		}
		
		if(pionki[i].charAt(0)=="b" && (pionki[i].charAt(2)==px+1 && pionki[i].charAt(4)==py-1) && (px+2==a && py-2==b)){
			if (($("#k"+poml+"a"+pomk).val()=="b" && $("#k"+poml2+"a"+pomk2).val()=="x"  && $("#k"+poml2+"a"+pomk2).val()=="x")||( $("#k"+pom2l+"a"+pom2k).val()=="b" && $("#k"+pom2l2+"a"+pom2k2).val()=="x" && $("#k"+pom2l2+"a"+pom2k2).val()=="x")||($("#k"+pom3l+"a"+pom3k).val()=="b" && $("#k"+pom3l2+"a"+pom3k2).val()=="x" && $("#k"+pom3l2+"a"+pom3k2).val()=="x")||($("#k"+pom4l+"a"+pom4k).val()=="b" && $("#k"+pom4l2+"a"+pom4k2).val()=="x" && $("#k"+pom4l2+"a"+pom4k2).val()=="x") ){
		
			location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4)+"&reload=1";
			}else{
				location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4);	
				
			}
		}
		if(pionki[i].charAt(0)=="b" && (pionki[i].charAt(2)==px-1 && pionki[i].charAt(4)==py+1) && (px-2==a && py+2==b)){
			
			if (($("#k"+poml+"a"+pomk).val()=="b" && $("#k"+poml2+"a"+pomk2).val()=="x"  && $("#k"+poml2+"a"+pomk2).val()=="x")||( $("#k"+pom2l+"a"+pom2k).val()=="b" && $("#k"+pom2l2+"a"+pom2k2).val()=="x" && $("#k"+pom2l2+"a"+pom2k2).val()=="x")||($("#k"+pom3l+"a"+pom3k).val()=="b" && $("#k"+pom3l2+"a"+pom3k2).val()=="x" && $("#k"+pom3l2+"a"+pom3k2).val()=="x")||($("#k"+pom4l+"a"+pom4k).val()=="b" && $("#k"+pom4l2+"a"+pom4k2).val()=="x" && $("#k"+pom4l2+"a"+pom4k2).val()=="x") ){
		
		location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4)+"&reload=1";
			}else{
				
				location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k=b&kasuj=1&kx="+pionki[i].charAt(2)+"&ky="+pionki[i].charAt(4);
				
			}
		}
		}
		
		if((a-1==px &&  b-1==py)||(a-1==px && b+1==py)){
			
					
					location.href="index2.php?x="+a+"&y="+b+"&px="+px+"&py="+py+"&k="+$("#k"+px+"a"+py).val();
					
				
		}
	
	
		
		}else{
		pyk=1;
}}
	//alert($("#k"+a+"a"+b).val());
	
	if(dalej!=1){
if($("#k"+a+"a"+b).val()=="c"){
//$("#"+a+"a"+b).html("");
kurs("<img src='czarny.png' width='50'>");
px=a;
py=b;

//alert("a="+a+" b="+b);
	}

if(pyk2==1){
	//alert(px+" "+py+" a"+a+" b"+b);
	for(var l=1;l<=inklude;l++){
		//dolprawy
//alert("petla");

px=a;
py=b;
var iy=b;
var ix=a;


//dolprawy
var ttt=pionki[l].charAt[2]+1;
var ttt2=pionki[l].charAt[4]+1;
			pomjx=ttt;
			pomjy=ttt2;
for(var j=iy;j<=9;j++){
	for(var i=ix;i<=9;i++){
		if(iy-j==ix-i){
			//prawy dul
			//$("#"+i+"a"+j).html(i+" dp"+j);
			
			if(pionki[l].charAt(2) == i && pionki[l].charAt(4) == j && pionki[l].charAt(2)!=a && pionki[l].charAt(4)!=b){
				//$("#"+i+"a"+j).html(i+" "+j);
		if (pionki[l].charAt(0) == "c"  ){
			
	


		var ala=dolprawy.charAt(0)+dolprawy.charAt(1)+dolprawy.charAt(2);
		var ola=pionki[l].charAt(2)+dolprawy.charAt(1)+pionki[l].charAt(4);
		if(dolprawy.charAt(0)>pionki[l].charAt(2) && dolprawy.charAt(2)>pionki[l].charAt(4)){
dolprawy=dolprawy.replace(ala,ola);	
		}
		
		}else if( pionki[l].charAt(0) == "b" && $("#k"+pomjx+"a"+pomjy).val()=="b"){
			
var ala=dolprawy.charAt(0)+dolprawy.charAt(1)+dolprawy.charAt(2);
		var ola=pionki[l].charAt(2)+dolprawy.charAt(1)+pionki[l].charAt(4);
	if(dolprawy.charAt(0)>pionki[l].charAt(2) && dolprawy.charAt(2)>pionki[l].charAt(4)){	
dolprawy=dolprawy.replace(ala,ola);
	}				
					}
		}
		}}}
					
			
		//gora lewa
					pomjx=pionki[l].charAt(2)-1;
			pomjy=pionki[l].charAt(4)-1;
			
			
			for(var j=iy;j>0;j--){
	for(var i=ix;i>0;i--){
		if(iy-j==ix-i){
			//$("#"+i+"a"+j).html(i+" gl "+j);
			if(pionki[l].charAt(2) == i && pionki[l].charAt(4)==j && pionki[l].charAt(2)!=a && pionki[l].charAt(4)!=b){
				//$("#"+i+"a"+j).html(i+" "+j);
		
		if (pionki[l].charAt(0) == "c"){
			
			
		
var ala=goralewa.charAt(0)+goralewa.charAt(1)+goralewa.charAt(2);
		var ola=pionki[l].charAt(2)+goralewa.charAt(1)+pionki[l].charAt(4);
		if(goralewa.charAt(0)<pionki[l].charAt(2) && goralewa.charAt(2)<pionki[l].charAt(4)){
goralewa=goralewa.replace(ala,ola);		
		}
		}else if( pionki[l].charAt(0) == "b" && $("#k"+pomjx+"a"+pomjy).val()=="b"){
			
			
		
var ala=goralewa.charAt(0)+goralewa.charAt(1)+goralewa.charAt(2);
		var ola=pionki[l].charAt(2)+goralewa.charAt(1)+pionki[l].charAt(4);
	if(goralewa.charAt(0)<pionki[l].charAt(2) && goralewa.charAt(2)<pionki[l].charAt(4)){	
goralewa=goralewa.replace(ala,ola);	
	}			
		}
		
		}
			}}}
		
		//dol lewy
					pomjx=pionki[l].charAt(2)-1;
			pomjy=pionki[l].charAt(4)+1;
			
			
	for(var i=iy;i<9;i++){
	for(var j=ix;j>0;j--){
		if(i-iy==ix-j){
				//$("#"+i+"a"+j).html(i+" dl "+j);
			if(pionki[l].charAt(2) == i && pionki[l].charAt(4)==j && pionki[l].charAt(2)!=a && pionki[l].charAt(4)!=b){
				//$("#"+i+"a"+j).html(i+" "+j);
		if (pionki[l].charAt(0) == "c"){
			
			
			
var ala=dollewy.charAt(0)+dollewy.charAt(1)+dollewy.charAt(2);
		var ola=pionki[l].charAt(2)+dollewy.charAt(1)+pionki[l].charAt(4);
		if(dollewy.charAt(0)<pionki[l].charAt(2) && dollewy.charAt(2)>pionki[l].charAt(4)){
dollewy=dollewy.replace(ala,ola);			
		}		
		}else if( pionki[l].charAt(0) == "b" && $("#k"+pomjx+"a"+pomjy).val()=="b"){
			
			
var ala=dollewy.charAt(0)+dollewy.charAt(1)+dollewy.charAt(2);
		var ola=pionki[l].charAt(2)+dollewy.charAt(1)+pionki[l].charAt(4);
		if(dollewy.charAt(0)<pionki[l].charAt(2) && dollewy.charAt(2)>pionki[l].charAt(4)){
dollewy=dollewy.replace(ala,ola);	
		}					
		}}
			}}}
		
		/*
					pomjx=pionki[l].charAt(2)-1;
			pomjy=pionki[l].charAt(4)+1;
			
			
	for(var i=iy;i>9;i--){
	for(var j=ix;j<0;j++){
		if(i-iy==ix-j){
				$("#"+i+"a"+j).html(i+"gp "+j);
			if(pionki[l].charAt(2) == i && pionki[l].charAt(4)==j && pionki[l].charAt(2)!=a && pionki[l].charAt(4)!=b){
				//$("#"+i+"a"+j).html(i+" "+j);
		if (pionki[l].charAt(0) == "b"){
			
			
			
var ala=goraprawa.charAt(0)+goraprawa.charAt(1)+goraprawa.charAt(2);
		var ola=pionki[l].charAt(2)+goraprawa.charAt(1)+pionki[l].charAt(4);
		if(goraprawa.charAt(0)<pionki[l].charAt(2) && goraprawa.charAt(2)>pionki[l].charAt(4)){
goraprawa=goraprawa.replace(ala,ola);			
		}		
		}else if( pionki[l].charAt(0) == "c" && $("#k"+pomjx+"a"+pomjy).val()=="c"){
			
			
var ala=goraprawa.charAt(0)+goraprawa.charAt(1)+goraprawa.charAt(2);
		var ola=pionki[l].charAt(2)+goraprawa.charAt(1)+pionki[l].charAt(4);
		if(goraprawa.charAt(0)<pionki[l].charAt(2) && goraprawa.charAt(2)>pionki[l].charAt(4)){
goraprawa=goraprawa.replace(ala,ola);	
		}					
		}}
			}}}
		
		*/
		//gora prawa
					pomjx=pionki[l].charAt(2)+1;
			pomjy=pionki[l].charAt(4)-1;
			
			
			for(var i=iy;i>0;i--){
	for(var j=ix;j<9;j++){
		
		if(iy-i==j-ix){
			//$("#"+i+"a"+j).html(i+"zzz"+j);
				
			if(pionki[l].charAt(2) == i && pionki[l].charAt(4)==j && pionki[l].charAt(2)!=a && pionki[l].charAt(4)!=b){
				//$("#"+i+"a"+j).html(i+" "+j);
		if (pionki[l].charAt(0) == "c"){
			
		
		
			//------------------------------------------------------
var ala=goraprawa.charAt(0)+goraprawa.charAt(1)+goraprawa.charAt(2);
		var ola=pionki[l].charAt(2)+goraprawa.charAt(1)+pionki[l].charAt(4);
		if(goraprawa.charAt(0)>pionki[l].charAt(2) && goraprawa.charAt(2)<pionki[l].charAt(4)){
goraprawa=goraprawa.replace(ala,ola);	
		}					
		}else if( pionki[l].charAt(0) == "b" && $("#k"+pomjx+"a"+pomjy).val()=="b"){
			
		

			
var ala=goraprawa.charAt(0)+goraprawa.charAt(1)+goraprawa.charAt(2);
		var ola=pionki[l].charAt(2)+goraprawa.charAt(1)+pionki[l].charAt(4);
		if(goraprawa.charAt(0)>pionki[l].charAt(2) && goraprawa.charAt(2)<pionki[l].charAt(4)){
goraprawa=goraprawa.replace(ala,ola);		
		}		
		}
		
		
			}	
		}
	}}
	
	
	
	
	
	}
		}
		if(pyk2==2){
			
			
			
			//***********************bicie*****************

//gora lewa
for(var j=px;j>=a;j--){
	for(var i=py;i>=b;i--){
		if(px-j==py-i){
		pomoc += j + 'a' + i+"z";
		
//alert(i+" "+j);
}}}
//dol prawy
for(var j=px;j<=a;j++){
	for(var i=py;i<=b;i++){
		if(px-j==py-i){
		pomoc += j + 'a' + i+"z";
		
//alert(i+" "+j);
}}}
//skos
for(var j=px;j<=a;j++){
	for(var i=py;i>=b;i--){
		//$("#"+i+"a"+i).html("orient");
		if(px-j==i-py){
		pomoc += j + 'a' + i+"z";
		
//alert(i+" "+j);
}}}
//skos
for(var j=px;j>=a;j--){
	for(var i=py;i<=b;i++){
		if(px-j==i-py){
		pomoc += j + 'a' + i+"z";
		
//alert(i+" "+j);
}}}


console.log(a+" "+b+" "+px+" "+py+" "+pomoc);

			
			
	//	alert("pyk2");	
			
var iy=py;
var ix=px;
//prawy dul
for(var j=iy;j<dolprawy.charAt(2);j++){
	for(var i=ix;i<dolprawy.charAt(0);i++){
		if(iy-j==ix-i){
if(i==a && j==b){
location.href="index2.php?dx="+a+"&dy="+b+"&dpx="+px+"&dpy="+py+"&cw=1&staryx="+px+"&staryy="+py+"&bicie="+pomoc;
	}
		}	
		
	}
		
}
//alert();
//lewa gora
for(var j=iy;j>goralewa.charAt(2);j--){
	for(var i=ix;i>goralewa.charAt(0);i--){
		if(iy-j==ix-i){
			//$("#"+i+"a"+j).html("b");
if(i==a && j==b){
	location.href="index2.php?dx="+a+"&dy="+b+"&dpx="+px+"&dpy="+py+"&cw=2&staryx="+px+"&staryy="+py+"&bicie="+pomoc;
	}
		}	
		
	}
		
}







//prawa gora
for(var j=iy;j<goraprawa.charAt(2);j++){
	for(var i=ix;i>goraprawa.charAt(0);i--){
		if(iy-j==i-ix){
			//$("#"+i+"a"+j).html("www");
if(i==a && j==b){
	
	location.href="index2.php?dx="+a+"&dy="+b+"&dpx="+px+"&dpy="+py+"&cw=3&staryx="+px+"&staryy="+py+"&bicie="+pomoc;
	//$("#"+i+"a"+j).html(i+" "+j);
}
		}	
		
	}
		
}
//lewy dol

for(var j=iy;j>dollewy.charAt(2);j--){
	for(var i=ix;i<dollewy.charAt(0);i++){
	
		if(iy-j==i-ix){
			//$("#"+i+"a"+j).html("p");
if(i==a && j==b){
	location.href="index2.php?dx="+a+"&dy="+b+"&dpx="+px+"&dpy="+py+"&cw=4&staryx="+px+"&staryy="+py+"&bicie="+pomoc;
	//$("#"+i+"a"+j).html(i+" "+j);
	}
		}	
		
	}
		
}

/*
for(var j=iy;j<dollewy.charAt(2);j++){
	for(var i=ix;i>dollewy.charAt(0);i--){
		if(iy-i==ix-j){
			$("#"+i+"a"+j).html("p");
if(j==a && i==b){
	location.href="index.php?dx="+a+"&dy="+b+"&dpx="+px+"&dpy="+py+"&cw=2&staryx="+px+"&staryy="+py;
	}
		}	
		
	}
		
}
	
*/	


}
pyk2++;
}
}}
console.log(dollewy + " ");


function laduj(){
	
	last_update = new Date().getTime();
	$.get( "load.txt", { lastfetch : last_update } , function( data ) {
 
		  	if(parseInt(data)==3){
				location.href="index2.php?load=1";
				}
	
});


if($('#ready').val()==1){
	
	$('#tekst').val('ready');
	
	
	
}
}
setInterval("laduj()", 1000);


</script>
<center>
czarne
<div id="kursor" style="display:none;position:absolute;"></div>
<table border="0" ><tr>
<td>
<div onclick="check(1,1);" id="1a1"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k1a1">
</td>
<td>
<div onclick="check(1,2);" id="1a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k1a2">
</td>
<td>
<div onclick="check(1,3);" id="1a3"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k1a3">
</td>
<td>
<div onclick="check(1,4);" id="1a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k1a4">
</td>
<td>
<div onclick="check(1,5);" id="1a5" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k1a5">
</td>
<td>
<div onclick="check(1,6);" id="1a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k1a6">
</td>
<td>
<div onclick="check(1,7);" id="1a7" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k1a7">
</td>
<td>
<div onclick="check(1,8);" id="1a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k1a8">
</td>
</tr>


<tr>
<td>
<div onclick="check(2,1);" id="2a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k2a1">
</td>
<td>
<div onclick="check(2,2);" id="2a2"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k2a2">
</td>
<td>
<div onclick="check(2,3);" id="2a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k2a3">
</td>
<td>
<div onclick="check(2,4);" id="2a4"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k2a4">
</td>
<td>
<div onclick="check(2,5);" id="2a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k2a5">
</td>
<td>
<div onclick="check(2,6);" id="2a6"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k2a6">
</td>
<td>
<div onclick="check(2,7);" id="2a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k2a7">
</td>
<td>
<div onclick="check(2,8);" id="2a8"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k2a8">
</td>
</tr>


<tr>
<td>
<div onclick="check(3,1);" id="3a1"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k3a1">
</td>
<td>
<div onclick="check(3,2);" id="3a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k3a2">
</td>
<td>
<div onclick="check(3,3);" id="3a3"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k3a3">
</td>
<td>
<div onclick="check(3,4);" id="3a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k3a4">
</td>
<td>
<div onclick="check(3,5);" id="3a5" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k3a5">
</td>
<td>
<div onclick="check(3,6);" id="3a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k3a6">
</td>
<td>
<div onclick="check(3,7);" id="3a7" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k3a7">
</td>
<td>
<div onclick="check(3,8);" id="3a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k3a8">
</td>
</tr>


<tr>
<td>
<div onclick="check(4,1);" id="4a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k4a1">
</td>
<td>
<div onclick="check(4,2);" id="4a2"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k4a2">
</td>
<td>
<div onclick="check(4,3);" id="4a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k4a3">
</td>
<td>
<div onclick="check(4,4);" id="4a4"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k4a4">
</td>
<td>
<div onclick="check(4,5);" id="4a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k4a5">
</td>
<td>
<div onclick="check(4,6);" id="4a6"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k4a6">
</td>
<td>
<div onclick="check(4,7);" id="4a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k4a7">
</td>
<td>
<div onclick="check(4,8);" id="4a8"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k4a8">
</td>
</tr>

<tr>
<td>
<div onclick="check(5,1);" id="5a1"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k5a1">
</td>
<td>
<div onclick="check(5,2);" id="5a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k5a2">
</td>
<td>
<div onclick="check(5,3);" id="5a3"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k5a3">
</td>
<td>
<div onclick="check(5,4);" id="5a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k5a4">
</td>
<td>
<div onclick="check(5,5);" id="5a5" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k5a5">
</td>
<td>
<div onclick="check(5,6);" id="5a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k5a6">
</td>
<td>
<div onclick="check(5,7);" id="5a7" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k5a7">
</td>
<td>
<div onclick="check(5,8);" id="5a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k5a8">
</td>
</tr>


<tr>
<td>
<div onclick="check(6,1);" id="6a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k6a1">
</td>
<td>
<div onclick="check(6,2);" id="6a2"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k6a2">
</td>
<td>
<div onclick="check(6,3);" id="6a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k6a3">
</td>
<td>
<div onclick="check(6,4);" id="6a4"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k6a4">
</td>
<td>
<div onclick="check(6,5);" id="6a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k6a5">
</td>
<td>
<div onclick="check(6,6);" id="6a6"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k6a6">
</td>
<td>
<div onclick="check(6,7);" id="6a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k6a7">
</td>
<td>
<div onclick="check(6,8);" id="6a8"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k6a8">
</td>
</tr>

<tr>
<td>
<div onclick="check(7,1);" id="7a1"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k7a1">
</td>
<td>
<div onclick="check(7,2);" id="7a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k7a2">
</td>
<td>
<div onclick="check(7,3);" id="7a3"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k7a3">
</td>
<td>
<div onclick="check(7,4);" id="7a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k7a4">
</td>
<td>
<div onclick="check(7,5);" id="7a5" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k7a5">
</td>
<td>
<div onclick="check(7,6);" id="7a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k7a6">
</td>
<td>
<div onclick="check(7,7);" id="7a7" style="background-color:A77E5C;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k7a7">
</td>
<td>
<div onclick="check(7,8);" id="7a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k7a8">
</td>
</tr>


<tr>
<td>
<div onclick="check(8,1);" id="8a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k8a1">
</td>
<td>
<div onclick="check(8,2);" id="8a2"  style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k8a2">
</td>
<td>
<div onclick="check(8,3);" id="8a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k8a3">
</td>
<td>
<div onclick="check(8,4);" id="8a4"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k8a4">
</td>
<td>
<div onclick="check(8,5);" id="8a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k8a5">
</td>
<td>
<div onclick="check(8,6);" id="8a6"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k8a6">
</td>
<td>
<div onclick="check(8,7);" id="8a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div><input type="hidden" value="x"  id="k8a7">
</td>
<td>
<div onclick="check(8,8);" id="8a8"   style="background-color:A77E5C;width:50px;height:50px;"></div><input type="hidden" value="x"  id="k8a8">
</td>
</tr>
</table>

<br>
<?

if($_GET["load"]==1){
	
	echo "<input type='button' value='reset' onclick='location.href=\"index2.php?load=1\";'>";
	
}


?>

<br>

<input type="hidden" id="ready">
<br><input type="text" id="tekst">


<script>
<?



$plik = fopen('pionki.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
$lista=explode("z",$tekst4);

foreach ($lista as $value){

$pionki=explode("a",$value);

//var_dump($pionki);
if($pionki[3]=="p"){

if($pionki[0]=="c"){
echo "$(\"#".$pionki[1]."a".$pionki[2]."\").html(\"<img src='czarny.png' width='50'>\");";
echo "$('#k".$pionki[1]."a".$pionki[2]."').val('c');";

}

if($pionki[0]=="b"){

echo "$(\"#".$pionki[1]."a".$pionki[2]."\").html(\"<img src='bialy.png' width='50'>\");";
echo "$('#k".$pionki[1]."a".$pionki[2]."').val('b');";
}


}else{
	
	
	if($pionki[0]=="c"){
echo "$(\"#".$pionki[1]."a".$pionki[2]."\").html(\"<img src='dczarny.png' width='50'>\");";
echo "$('#k".$pionki[1]."a".$pionki[2]."').val('c');";

}

if($pionki[0]=="b"){

echo "$(\"#".$pionki[1]."a".$pionki[2]."\").html(\"<img src='dbialy.png' width='50'>\");";
echo "$('#k".$pionki[1]."a".$pionki[2]."').val('b');";
}
	
	
	
}
}


?>
</script>


<? 


$tabela=$_GET["bicie"];
$ax=$_GET["dx"];
$ay=$_GET["dy"];
$adx=$_GET["staryx"];
$ady=$_GET["staryy"];

if(!empty($tabela)){
$plik = fopen('pionki.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$huhu=$tekst5;
//-pionek
//petla-------------

$bicie = explode("z", $tabela);
foreach ($bicie as $value){
$pupu="ba".$value{0}."a".$value{2}."apz";
$wuwu="";
$huhu=str_replace($pupu,$wuwu, $huhu);
//-damka
$pupu="ba".$value{0}."a".$value{2}."adz";
$wuwu="";
$huhu=str_replace($pupu,$wuwu, $huhu);
}
//po petli----------------
//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$huhu."');</script>";
//---------------------------------------------------------
//-pionek
$pupu="ca".$adx."a".$ady."adz";
$wuwu="ca".$ax."a".$ay."adz";
$huhu=str_replace($pupu,$wuwu, $huhu);
//-damka
$huhu=str_replace($pupu,$wuwu, $huhu);

$plik2 = fopen('pionki.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
header("Location: index2.php?load=2");
	}




$staryx=$_GET["staryx"];
$staryy=$_GET["staryy"];
$k=$_GET["k"];
$x=$_GET["x"];
$y=$_GET["y"];

$px=$_GET["px"];
$py=$_GET["py"];
$reload=$_GET["reload"];
if(!empty($x)){
	
$plik = fopen('pionki.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lulu=$tekst5;
$pupu="ca".$x."a".$y."apz";
$wuwu="ca".$px."a".$py."apz";
$huhu=str_replace($wuwu,$pupu,$lulu);
//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$pupu." na ".$wuwu." gdy ".$lulu."');</script>";
$plik2 = fopen('pionki.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
//echo("<script>location.href='index.php?change=".$_GET["change"]."&pion=".$_GET["pion"]."';</script>");
$kasuj=$_GET["kasuj"];
$kx=$_GET["kx"];
$ky=$_GET["ky"];

if($kasuj==1){
	
	
	
$plik = fopen('pionki.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lulu=$tekst5;
//-pionek
$pupu="ba".$kx."a".$ky."apz";
$wuwu="";
$huhu=str_replace($pupu,$wuwu, $lulu);
//-damka
$pupu="ba".$kx."a".$ky."adz";
$wuwu="";
$huhu=str_replace($pupu,$wuwu, $huhu);

//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$huhu."');</script>";
$plik2 = fopen('pionki.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
	
	
}

if($x==8){
	
	
	
$plik = fopen('pionki.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lulu=$tekst5;
//-pionek
$pupu="ca".$x."a".$y."apz";
$wuwu="ca".$x."a".$y."adz";
$huhu=str_replace($pupu,$wuwu, $lulu);

$huhu=str_replace($pupu,$wuwu, $huhu);

//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$huhu."');</script>";
$plik2 = fopen('pionki.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
	
	//header("Location: index2.php");
}
if($reload==1){
header("Location: index2.php?load=1");
}else{
	header("Location: index2.php?load=2");
}
}
if($x==8){
	
	
	
$plik = fopen('pionki.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lulu=$tekst5;
//-pionek
$pupu="ca".$x."a".$y."apz";
$wuwu="ca".$x."a".$y."adz";
$huhu=str_replace($pupu,$wuwu, $lulu);

$huhu=str_replace($pupu,$wuwu, $huhu);

//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$huhu."');</script>";
$plik2 = fopen('pionki.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
	
	header("Location: index2.php?load=2");
}
?>
<script>
var dzialanie;
	
	/*
	dzialanie = 723972985 + 2473487943;
	$("#8a8").html(dzialanie);


var iy=5;
var ix=4;
//prawy dul
for(var i=iy;i<=9;i++){
	for(var j=ix;j<=9;j++){
		if(iy-i==ix-j){
$("#"+i+"a"+j).html(j+" "+i);
		}	
		
	}
		
}
//lewa gora
for(var i=iy;i>0;i--){
	for(var j=ix;j>0;j--){
		if(iy-i==ix-j){
$("#"+i+"a"+j).html(j+" "+i);
		}	
		
	}
		
}
//prawa gora
for(var i=iy;i>0;i--){
	for(var j=ix;j<=9;j++){
		if(iy-i==j-ix){
$("#"+i+"a"+j).html(j+" "+i);
		}	
		
	}
		
}
//lewy dol
for(var i=iy;i<9;i++){
	for(var j=ix;j>0;j--){
		if(i-iy==ix-j){
$("#"+i+"a"+j).html(j+" "+i);
		}	
		
	}
		
}


var u=1;
function funkcja(){
	
	u++;

	$("#men").val(u);
	
}
*/
//window.setInterval('funkcja();', 1000);
</script>
<?
$load=$_GET["load"];
if($load==1){
	
	$plik = fopen('load.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lulu=$tekst5;


$huhu="2";

//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$huhu."');</script>";
$plik2 = fopen('load.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
	
	echo "<script>$('#ready').val('1');</script>";
}

if($load==2){
	
		$plik = fopen('load.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lulu=$tekst5;


$huhu="1";

//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$huhu."');</script>";
$plik2 = fopen('load.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
	
}




?>
