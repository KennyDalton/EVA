@extends('layouts.app')
@section('content')

<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>

<h1 class="text-center">Calendario</h1>

<div class="month">      
  <ul>
    <li class="prev btn "onclick="cambiarMes2()">&#10094;</li>

    <li class="next btn" onclick="cambiarMes()">&#10095;</li>
    <li>
      <p id="p1"> Junio </p><br>
      <span style="font-size:18px"><p id="p2"> 2018 </p></span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Lunes</li>
  <li>Martes</li>
  <li>Miercoles</li>
  <li>Jueves</li>
  <li>Viernes</li>
  <li>Sabado</li>
  <li>Domingo</li>
</ul>

<ul class="days borde">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li><span class="active">17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li><span class="active">25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

<script type="text/javascript">
	var mes = document.getElementById("p1");
	var ano = document.getElementById("p2");
    var color2 = "amarillo";
    var aux = 7;
	function cambiarMes() 
	{
		switch(aux)
		{
			case 1: 
		    	mes.innerHTML = "Enero";
		    	ano.innerHTML = "2019";
		    	aux++;
		    	break;
		    case 2: 
		    	mes.innerHTML = "Febrero";
		    	aux++;
		    	break;
		    case 3: 
		    	mes.innerHTML = "Marzo";
		    	aux++;
		    	break;
		    case 4: 
		    	mes.innerHTML = "Abril";
		    	aux++;
		    	break;
		    case 5: 
		    	mes.innerHTML = "Mayo";
		    	aux++;
		    	break;
		    case 6: 
		    	mes.innerHTML = "Junio";
		    	aux++;
		    	break;
		    case 7: 
		    	mes.innerHTML = "Julio";
		    	aux++;
		    	break;
		    case 8: 
		    	mes.innerHTML = "Agosto";
		    	aux++;
		    	break;
		    case 9: 
		    	mes.innerHTML = "Septiembre";
		    	aux++;
		    	break;
		    case 10: 
		    	mes.innerHTML = "Octubre";
		    	aux++;
		    	break;
		    case 11: 
		    	mes.innerHTML = "Noviembre";
		    	aux++;
		    	break;
		    case 12: 
		    	mes.innerHTML = "Diciembre";
		    	aux = 1;
		    	break;
	    }
	} 

	function cambiarMes2() 
	{
		//aux= aux-1;
		switch(aux)
		{
			case 1: 
		    	mes.innerHTML = "Enero";
		    	aux=12;
		    	break;
		    case 2: 
		    	mes.innerHTML = "Febrero";
		    	aux--;
		    	break;
		    case 3: 
		    	mes.innerHTML = "Marzo";
		    	aux--;
		    	break;
		    case 4: 
		    	mes.innerHTML = "Abril";
		    	aux--;
		    	break;
		    case 5: 
		    	mes.innerHTML = "Mayo";
		    	aux--;
		    	break;
		    case 6: 
		    	mes.innerHTML = "Junio";
		    	aux--;
		    	break;
		    case 7: 
		    	mes.innerHTML = "Julio";
		    	aux--;
		    	break;
		    case 8: 
		    	mes.innerHTML = "Agosto";
		    	aux--;
		    	break;
		    case 9: 
		    	mes.innerHTML = "Septiembre";
		    	aux--;
		    	break;
		    case 10: 
		    	mes.innerHTML = "Octubre";
		    	aux--;
		    	break;
		    case 11: 
		    	mes.innerHTML = "Noviembre";
		    	aux--;
		    	break;
		    case 12: 
		    	mes.innerHTML = "Diciembre";
		    	ano.innerHTML = "2017";
		    	aux = 11;
		    	break;
	    }
	}
	//document.getElementById('p1').innerHTML = "Hola"
</script>

@endsection