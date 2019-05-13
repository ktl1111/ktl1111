<HTML>
<HEAD>
<META NAME="GENERATOR" Content="Microsoft Visual Studio 6.0">
<TITLE></TITLE>
</HEAD>
<BODY>
<HTML>
<HEAD>
<META name=VI60_defaultClientScript content=JavaScript>
<META NAME="GENERATOR" Content="Microsoft Visual Studio 6.0">
<TITLE></TITLE>
<SCRIPT ID=clientEventHandlersJS LANGUAGE=javascript>
<!--

function button1_onclick()
{

  var item=table1.children(0).children(0).cloneNode(true);
  var item2=table1.children(0).insertBefore(item);
  var item1=table1.children(0).children(table1.children(0).children.length);
  var qq=(item2.children.length);

  for (var i=0;i< qq ;i++)
  {
   item2.children(i).innerHTML="<input type=text name=text1 value=''>";
  }

}

//-->
</SCRIPT>
</HEAD>
<BODY>

<P>
<form id=a1>
<div id=cc>
  <table id=table1 cellSpacing=1 cellPadding=1 width="75%" border=1>
   <tbody>
     <tr><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td></tr>
     <tr><td>A1</td><td>B1</td><td>C1</td><td>D1</td><td>E1</td><td>F1</td></tr>
     <tr><td>A2</td><td>B2</td><td>C2</td><td>D2</td><td>E2</td><td>F2</td></tr>
   </tbody>

  </table>
 </div>
</P>
<INPUT type="button" value="Button" id=button1 name=button1 LANGUAGE=javascript onclick="return button1_onclick()">
</form>
</BODY>
</HTML>
<P> </P>

</BODY>
</HTML>
