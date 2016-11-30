/**
 * Created by yago on 28/11/16.
 */

for(var i=1; i<=10; i++){

    document.writeln("<table border='1'><tr colspan='2'><td>Produto "+i+"</td></tr>");


            for(var j=1; j<=10; j++){
                document.writeln("<td > "+i+" * "+j+" </td><td>"+i * j+"</td>");
            }

    document.writeln("</table>");
}
