<?PHP
		include_once('inegifacil/INEGI_library.php');
		$inegi = new INEGI_library();
		$variable= $_REQUEST["id"];
		if ($variable=="01"){
		$col1=array();
		$col1["label"]="Trimestre";
		$col1["type"]="string";
		//print_r($col1);
		$col2=array();
		$col2["id"]="ÍNDICE";
		$col2["label"]="2013";
		$col2["type"]="number";
		$col3=array();
		$col3["id"]="ÍNDICE";
		$col3["label"]="2014";
		$col3["type"]="number";
		//print_r($col2);
		$col4=array();
		$col4["id"]="ÍNDICE";
		$col4["label"]="2015";
		$col4["type"]="number";
		$col5=array();
		$col5["id"]="ÍNDICE";
		$col5["label"]="2016";
		$col5["type"]="number";
		$col6=array();
		$col6["id"]="";
		$col6["label"]="2017";
		$col6["type"]="number";
		$col7=array();
		$col7["id"]="";
		$col7["label"]="2018";
		$col7["type"]="number";
		$col8=array();
		$col9=array();
		$col8["id"]= "";
		$col8["role"]= "tooltip";
		$col9["role"]= "tooltip";
		$col8["type"]= "string";
		$col8["p"]=$col9;	
		$cols = array($col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8);
		//print_r($cols);
		
		$indice =428050; //
		$lugar = 00;
		
		$response = $inegi->index($indice, $lugar);
		

		for($i=0;$i<count($response ["indices"]);$i++){
		$array = json_encode($response ['indices'][$i]['TIME_PERIOD']);
		for($i1=0;$i1<count($response ["indices"]);$i1++){
		$array1 = json_encode($response ['indices'][$i1]['TIME_PERIOD']);
		$array2 = json_encode($response ['indices'][$i1]['OBS_VALUE']);
		
		if ($array==$array1){
		$texto2=str_replace('"','',$array2); 
		$texto=str_replace('"','',$array1); 
		$texto=str_replace('\/','',$texto);
		$variable=substr($texto,0,4);
		$variable1=substr($texto,4,2);
		if ($variable >="2013"){
		
		$nombres [] =number_format($texto2, 2, '.', ' ');
		};
		};
		};
		};
	
		$leye="Unidad de Medida:\nÍndice";
		$enter="\n";
		$leye2="Porcentaje";
		$leye3="Número de Personas";
		$cell0["v"]="I";
	    $cell0["f"]="I";
		$cell1["v"]=$nombres [0];
		
		$cell1["f"]=$nombres [0].$enter.$leye;
		$cell2["v"]=$nombres [4];
		$cell2["f"]=$nombres [4].$enter.$leye;
		$cell3["v"]=$nombres [8];
		$cell3["f"]=$nombres [8].$enter.$leye;
		if (isset($nombres [12] )){
		$cell4["v"]=$nombres [12];
		$cell4["f"]=$nombres [12].$enter.$leye;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [16] )){
		$cell5["v"]=$nombres [16];
		$cell5["f"]=$nombres [16].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [20] )){
		$cell6["v"]=$nombres [20];
		$cell6["f"]=$nombres [20].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [24] )){
		$cell7["v"]=$nombres [24];
		$cell7["f"]=$nombres [24].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};	
		$row0["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		$cell0["v"]="II";
		$cell0["f"]="II";
		$cell1["v"]=$nombres [1];
		$cell1["f"]=$nombres [1].$enter.$leye;;
		$cell2["v"]=$nombres [5];
		$cell2["f"]=$nombres [5].$enter.$leye;;
		if (isset($nombres [9] )){
		$cell3["v"]=$nombres [9];
		$cell3["f"]=$nombres [9].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		
		if (isset($nombres [13] )){
		$cell4["v"]=$nombres [13];
		$cell4["f"]=$nombres [13].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [17] )){
		$cell5["v"]=$nombres [17];
		$cell5["f"]=$nombres [17].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [21] )){
		$cell6["v"]=$nombres [21];
		$cell6["f"]=$nombres [21].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [25] )){
		$cell7["v"]=$nombres [25];
		$cell7["f"]=$nombres [25].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row1["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="III";
		$cell0["f"]="III";
		$cell1["v"]=$nombres [2];
		$cell1["f"]=$nombres [2].$enter.$leye;;
		$cell2["v"]=$nombres [6];
		$cell2["f"]=$nombres [6].$enter.$leye;;
		if (isset($nombres [10] )){
		$cell3["v"]=$nombres [10];
		$cell3["f"]=$nombres [10].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [14] )){
		$cell4["v"]=$nombres [14];
		$cell4["f"]=$nombres [14].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [18] )){
		$cell5["v"]=$nombres [18];
		$cell5["f"]=$nombres [18].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [22] )){
		$cell6["v"]=$nombres [22];
		$cell6["f"]=$nombres [22].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [26] )){
		$cell7["v"]=$nombres [26];
		$cell7["f"]=$nombres [26].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row2["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		 
		$cell0["v"]="IV";
		$cell0["f"]="IV";
		$cell1["v"]=$nombres [3];
		$cell1["f"]=$nombres [3].$enter.$leye;;
		$cell2["v"]=$nombres [7];
		$cell2["f"]=$nombres [7].$enter.$leye;;
		if (isset($nombres [11] )){
		$cell3["v"]=$nombres [11];
		$cell3["f"]=$nombres [11].$enter.$leye;;
		} else {
		$cell3["v"]="null";
		$cell3["f"]="null";
		};
		if (isset($nombres [15] )){
		$cell4["v"]=$nombres [15];
		$cell4["f"]=$nombres [15].$enter.$leye;;
		} else {
		$cell4["v"]="null";
		$cell4["f"]="null";
		};
		if (isset($nombres [19] )){
		$cell5["v"]=$nombres [19];
		$cell5["f"]=$nombres [19].$enter.$leye;;
		} else {
		$cell5["v"]="null";
		$cell5["f"]="null";
		};
		if (isset($nombres [23] )){
		$cell6["v"]=$nombres [23];
		$cell6["f"]=$nombres [23].$enter.$leye;;
		} else {
		$cell6["v"]="null";
		$cell6["f"]="null";
		};
		if (isset($nombres [27] )){
		$cell7["v"]=$nombres [27];
		$cell7["f"]=$nombres [27].$enter.$leye;;
		} else {
		$cell7["v"]="null";
		$cell7["f"]="null";
		};
		$row3["c"]=array($cell0,$cell1,$cell2,$cell3,$cell4,$cell5,$cell6,$cell7);
		
		
		
		
		//$rows=array($row0,$row1,$row2,$row3,$row4);
		$rows=array();
		array_push($rows,$row0);
		array_push($rows,$row1);
		array_push($rows,$row2);
		array_push($rows,$row3);
		}