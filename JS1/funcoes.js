/**
 * Created by yago on 28/11/16.
 */

for(var i=1; i<=10; i++){

    document.writeln("<table border='1'><tr><td colspan='2'><b>Produtos de "+i+"</b></td>");

            for(var j=1; j<=10; j++){
                document.writeln("<tr><td > "+i+" * "+j+" </td><td>"+i * j+"</td></tr>");
            }

    document.writeln("</tr></table>");
}
