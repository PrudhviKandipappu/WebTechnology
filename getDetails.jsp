<%@ page import="java.sql.*"%>
<%@ page import="org.json.*"%>
<%
	String db = "dbPrudhvi";
	String user = "Prudhvi";
	String password = "Prudhvi@2004";
	Connection dbConnection = null;
	try {
		dbConnection = DriverManager.getConnection("jdbc:mysql://138.68.140.83/dbPrudhvi", user, password);
	}
	catch (Exception e) {
		out.println(e);
	}
	String selectQuery = "SELECT *FROM Item WHERE ItemID = " + request.getParameter("itemID");
	Statement stmt = dbConnection.createStatement();
	ResultSet rs = stmt.executeQuery(selectQuery);
	String fields[] = {"ItemID", "Description", "StockQty", "UnitPrice", "SupplierID"};
	int fieldCounter = 0;
	JSONObject jsonObject = new JSONObject();
	rs.next();
	jsonObject.put("ItemID: ", rs.getString("ItemID"));
	jsonObject.put("Description: ", rs.getString("Description"));
	jsonObject.put("StockQty: ", rs.getInt("StockQty"));
	jsonObject.put("UnitPrice: ", rs.getInt("UnitPrice"));
	jsonObject.put("Supplier ID: ", rs.getInt("SupplierID"));
	// out.println("ItemID: " + rs.getString("ItemID"));
	// out.println("Description: " + rs.getString("Description"));
	// out.println("StockQty: " + rs.getInt("StockQty"));
	// out.println("UnitPrice: " + rs.getInt("UnitPrice"));
	// out.println("Supplier ID: " + rs.getInt("SupplierID"));
	out.println(jsonObject);
%>
