<!-- connect to MySQL database -->
<%@ page import="java.sql.*"%>
<html>
	<head>
		<title>
			JDBC Connecion Example
		</title>
	</head>
	<body>
		<%
			String db = "dbPrudhvi";
			String user = "Prudhvi";
			String password = "Prudhvi@2004";
			try {
				Connection dbConneciton;
				Class.forName("or.gjt.mm.mysql.Driver");
				dbConneciton = DriverManager.getConnection("jdbc://138.68.140.83/dbPrudhvi", user, password);
				out.println("Connection sucessfully establised");
			}
			catch (Exception e) {
				out.println(e);
			}
		%>
	</body>
</html>