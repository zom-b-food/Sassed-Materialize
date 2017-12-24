package demopool;

import java.sql.*;


public class RegisterDB {

    public static synchronized boolean isMatch(Connection connection,
                                               String emailAddress) throws SQLException {
        String query = "SELECT EmailAddress FROM user " +
                "WHERE EmailAddress = '"
                + SQLUtil.encode(emailAddress) + "'";
        Statement statement = connection.createStatement();
        ResultSet results = statement.executeQuery(query);
        boolean emailExists = results.next();
        results.close();
        statement.close();
        return emailExists;
    }

    public static synchronized int addRecord(Connection connection,
                                             AddUsers addusers) throws SQLException {
        String query =
                "INSERT INTO user " +
                        "(UserName, EmailAddress) " +
                        "VALUES ('" + SQLUtil.encode(addusers.getUserName()) + "', " +
                        "'" + SQLUtil.encode(addusers.getEmailAddress()) + "')";
        Statement statement = connection.createStatement();
        int status = statement.executeUpdate(query);
        statement.close();
        return status;
    }

    public static synchronized AddUsers getAddUsers(Connection connection,
                                                    String emailAddress) throws SQLException {
        String query = "SELECT * FROM user " +
                "WHERE EmailAddress = '"
                + SQLUtil.encode(emailAddress) + "'";
        Statement statement = connection.createStatement();
        ResultSet results = statement.executeQuery(query);
        AddUsers addusers = new AddUsers();
        if (results.next() == true) {
            addusers.setEmailAddress(results.getString("EmailAddress"));
            addusers.setUserName(results.getString("UserName"));

        }
        results.close();
        statement.close();
        return addusers;
    }
}
