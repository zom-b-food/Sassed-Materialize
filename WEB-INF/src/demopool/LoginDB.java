package demopool;

import java.sql.*;

public class LoginDB {

    public static synchronized boolean isMatch(Connection connection,
                                               String userName, String emailAddress) throws SQLException {
        String query = "select * from user where userName='" + userName + "' and emailAddress='" + emailAddress + "'";
        Statement statement = connection.createStatement();
        ResultSet results = statement.executeQuery(query);
        boolean emailExists = results.next();
        results.close();
        statement.close();
        return emailExists;
    }

}
