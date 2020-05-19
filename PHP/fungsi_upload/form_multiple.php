<script type="text/javascript">
 function show(){
    var n = document.myform.jumfile.value; //dwdwdw
    var i;
    var string = "";

    for(i = 0; i <= n; i++){
        string = string + "Pilih File : <input name=\"userfile"+i+"\" type=\"file"\><br>"
    }
    document.getElementById('selectfile').innerHTML = string;
    document.myform.n.value = n;    
 }
 </script>

 <form name="myform" enctype="multipart/form-data" action="upload.php" method="POST">
    Pilih Jumlah File

    <select name="jumfile" onChange="show()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
    <br><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
    <div id="selectfile"></div><br>
    <input type="hidden" name="n" />
    <input type="submit" name="submit" value="Upload" />
 </form>