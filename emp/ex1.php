<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


 
<style type="text/css">
body{
 border:0px none;
 text-align: center;
}
 
.formModTop {
 background:url('formHeader.gif') no-repeat;
 height:8px; 
 margin-left: auto;
 margin-right: auto;
}
 
.formModBot {
 background:url('formFooter.gif') no-repeat;
 height:8px;
 margin-left: auto;
 margin-right: auto;
}
.formBox {
 background:url('formBackground.gif') repeat-y;
 margin-left: auto;
 margin-right: auto;
}
.formBox label {
 float:left;
 display:block;
 margin-top:5px;
 font-weight:bold;
}
.formBox label.radio {
 float:left;
 display:normal;
 font-weight:normal;
 width:455px;
}
.formBox input.check {
 float:left;
}
.formBox .inputField, .formBox textarea {
 clear:both;
 display:block;
 width:478px;
 border:1px solid #9f9f9f;
}
</style>
</head>    
<body>
<h3>
<a name="AddComment">
</a>Your comment
</h3>
<span>
<div class="formModTop">&nbsp;</div>
<div class="formBox">
 
<form class="genForm" name="addcomment" id="YourComment" method="POST" action="pagexyz.asp" 
<p><label for="name">Name:</label><input type="text" class="inputField" name="name" id="name" /></p>
<label for="email">Email:</label>
<input type="text" name="email" class="inputField" id="email" /></p>
<p><label for="town">Town and country:</label><input type="text" value="" name="location" class="inputField" id="town" /></p>
<p>
<label for="maxLength">
Your comment:</label>
<textarea class="" id="maxLength" name="comment" rows="7"></textarea>
<span id="">You have <span id=""></span>&nbsp;characters left.</span>
<br />
</p>
<br/>
<input type="reset" value="Clear" /> 
<input type="submit" value="submit comment" class="basic" />
</form>
</div>
<div class="formModBot">&nbsp;</div>
</body>
</html>