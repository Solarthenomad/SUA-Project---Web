<?php
 $PrefectureList = array("서울특별시","부산광역시","대구광역시","울산광역시
","광주광역시","대전광역시","인천광역시","세종특별자치시","경기도","강원도","충
청북도","충청남도","경상북도","경상남도","전라북도","전라남도","제주특별자치도
","함경북도","함경남도","평안북도","평안남도","황해도");
 $html = "<SELECT name=\"prefecture\" >\n";
 for($i = 0;$i <= count($PrefectureList) - 1;$i ++) {
 $html .= "<OPTION value=\"$i\">$PrefectureList[$i]</OPTION> \n"; }
$html .= "</SELECT>\n"; print $html;
 ?>