{"filter":false,"title":"viewedit.php","tooltip":"/docs/viewedit.php","undoManager":{"mark":61,"position":61,"stack":[[{"start":{"row":12,"column":26},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":81},"action":"insert","lines":["<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../images/favicon.ico\" />"],"id":3}],[{"start":{"row":19,"column":115},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":4},"end":{"row":25,"column":9},"action":"insert","lines":[" <script type=\"text/javascript\">","$(document).ready(function(){","$('body').hide();","$('body').fadeIn(2000);","});","</script>"],"id":5}],[{"start":{"row":20,"column":5},"end":{"row":25,"column":8},"action":"remove","lines":["<script type=\"text/javascript\">","$(document).ready(function(){","$('body').hide();","$('body').fadeIn(2000);","});","</script"],"id":6}],[{"start":{"row":19,"column":115},"end":{"row":20,"column":6},"action":"remove","lines":["","     >"],"id":7}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":28},"action":"remove","lines":["Lista de Usuarios"],"id":8},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["P"]}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["r"],"id":9}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["o"],"id":10}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["f"],"id":11}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["i"],"id":12}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["l"],"id":13}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["e"],"id":14}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["E"],"id":15}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["d"],"id":16}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["i"],"id":17}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["t"],"id":18}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":[" "],"id":19}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":[" "],"id":20}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["t"],"id":21}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["i"],"id":22}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["d"],"id":23}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"remove","lines":["E"],"id":24}],[{"start":{"row":26,"column":49},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":25},{"start":{"row":27,"column":0},"end":{"row":27,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":27,"column":16},"end":{"row":27,"column":58},"action":"insert","lines":["<a href=\"exposiciones.php\">Expositions</a>"],"id":26}],[{"start":{"row":1,"column":17},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":27}],[{"start":{"row":2,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["if(empty($_SESSION[\"administrador_usuario\"]) || $_SESSION[\"administrador_usuario\"]!=\"1\"){","    header(\"Location:../login.php?m=300\"); ","}"],"id":28}],[{"start":{"row":30,"column":58},"end":{"row":31,"column":50},"action":"remove","lines":["","                <a href=\"quentin.html\">Quentin</a>"],"id":29}],[{"start":{"row":2,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["if(empty($_SESSION[\"administrador_usuario\"]) || $_SESSION[\"administrador_usuario\"]!=\"1\"){","    header(\"Location:../login.php?m=300\"); ","}"],"id":30},{"start":{"row":2,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["if($_SESSION[\"administrador_usuario\"]===\"0\" && $_SESSION[\"personal\"]===\"0\"){","    header(\"Location:../login.php?m=300\"); ","}"]}],[{"start":{"row":99,"column":71},"end":{"row":99,"column":72},"action":"remove","lines":["0"],"id":131},{"start":{"row":99,"column":71},"end":{"row":99,"column":94},"action":"insert","lines":["$usuario->getPersonal()"]}],[{"start":{"row":99,"column":71},"end":{"row":99,"column":72},"action":"insert","lines":["."],"id":132}],[{"start":{"row":99,"column":71},"end":{"row":99,"column":72},"action":"insert","lines":["'"],"id":133}],[{"start":{"row":99,"column":71},"end":{"row":99,"column":72},"action":"remove","lines":["'"],"id":134}],[{"start":{"row":99,"column":95},"end":{"row":99,"column":96},"action":"insert","lines":["."],"id":135}],[{"start":{"row":99,"column":96},"end":{"row":99,"column":97},"action":"insert","lines":["\""],"id":136}],[{"start":{"row":99,"column":71},"end":{"row":99,"column":72},"action":"insert","lines":["\""],"id":137}],[{"start":{"row":99,"column":36},"end":{"row":99,"column":41},"action":"remove","lines":["radio"],"id":138},{"start":{"row":99,"column":36},"end":{"row":99,"column":37},"action":"insert","lines":["t"]}],[{"start":{"row":99,"column":37},"end":{"row":99,"column":38},"action":"insert","lines":["e"],"id":139}],[{"start":{"row":99,"column":38},"end":{"row":99,"column":39},"action":"insert","lines":["x"],"id":140}],[{"start":{"row":99,"column":39},"end":{"row":99,"column":40},"action":"insert","lines":["t"],"id":141}],[{"start":{"row":99,"column":106},"end":{"row":99,"column":132},"action":"remove","lines":["<?php echo $checkstaff0 ?>"],"id":142}],[{"start":{"row":99,"column":106},"end":{"row":99,"column":107},"action":"insert","lines":[">"],"id":143}],[{"start":{"row":87,"column":12},"end":{"row":87,"column":100},"action":"insert","lines":["<?php if($_SESSION[\"personal_usuario\"]==\"1\" or $_SESSION[\"administrador_usuario\"]==\"1\"){"],"id":144}],[{"start":{"row":87,"column":100},"end":{"row":87,"column":101},"action":"insert","lines":["?"],"id":145}],[{"start":{"row":87,"column":101},"end":{"row":87,"column":102},"action":"insert","lines":[">"],"id":146}],[{"start":{"row":91,"column":22},"end":{"row":92,"column":0},"action":"insert","lines":["",""],"id":147},{"start":{"row":92,"column":0},"end":{"row":92,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":92,"column":12},"end":{"row":92,"column":13},"action":"insert","lines":["<"],"id":148}],[{"start":{"row":92,"column":13},"end":{"row":92,"column":14},"action":"insert","lines":["?"],"id":149}],[{"start":{"row":92,"column":14},"end":{"row":92,"column":15},"action":"insert","lines":["p"],"id":150}],[{"start":{"row":92,"column":15},"end":{"row":92,"column":16},"action":"insert","lines":["h"],"id":151}],[{"start":{"row":92,"column":16},"end":{"row":92,"column":17},"action":"insert","lines":["p"],"id":152}],[{"start":{"row":92,"column":17},"end":{"row":92,"column":18},"action":"insert","lines":[" "],"id":153}],[{"start":{"row":92,"column":18},"end":{"row":92,"column":19},"action":"insert","lines":["}"],"id":154}],[{"start":{"row":92,"column":19},"end":{"row":92,"column":20},"action":"insert","lines":[" "],"id":155}],[{"start":{"row":92,"column":20},"end":{"row":92,"column":21},"action":"insert","lines":["?"],"id":156}],[{"start":{"row":92,"column":21},"end":{"row":92,"column":22},"action":"insert","lines":[">"],"id":157}],[{"start":{"row":88,"column":0},"end":{"row":88,"column":4},"action":"insert","lines":["    "],"id":158},{"start":{"row":89,"column":0},"end":{"row":89,"column":4},"action":"insert","lines":["    "]},{"start":{"row":90,"column":0},"end":{"row":90,"column":4},"action":"insert","lines":["    "]},{"start":{"row":91,"column":0},"end":{"row":91,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":86,"column":103},"end":{"row":87,"column":0},"action":"insert","lines":["",""],"id":159},{"start":{"row":87,"column":0},"end":{"row":87,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":88,"column":21},"end":{"row":88,"column":58},"action":"remove","lines":["$_SESSION[\"personal_usuario\"]==\"1\" or"],"id":160}],[{"start":{"row":88,"column":21},"end":{"row":88,"column":22},"action":"remove","lines":[" "],"id":161}],[{"start":{"row":120,"column":49},"end":{"row":120,"column":60},"action":"insert","lines":["id='borrar'"],"id":162}],[{"start":{"row":120,"column":60},"end":{"row":120,"column":61},"action":"insert","lines":[" "],"id":163}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":1},"end":{"row":4,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1456534384430,"hash":"e5d5fe58b2550468bb21cde9c909800c31f9dd07"}