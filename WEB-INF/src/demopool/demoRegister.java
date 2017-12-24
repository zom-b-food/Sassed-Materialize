package demopool;

import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import javax.naming.*;
import javax.sql.*;

public class demoRegister extends HttpServlet {
    DataSource pool;

    public void init()
            throws ServletException {
        try {
            Context env = (Context) new InitialContext().lookup("java:comp/env");

            pool = (DataSource) env.lookup("jdbc/demo");

            if (pool == null)
                throw new ServletException("`jdbc/demo' is an unknown DataSource");
        } catch (NamingException e) {
            throw new ServletException(e);
        }
    }

    public void doGet(HttpServletRequest request,
                      HttpServletResponse response)
            throws IOException, ServletException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        Connection conn = null;
        try {
            conn = pool.getConnection();

            // paste my stuff here

            String userName = request.getParameter("userName");
            String emailAddress = request.getParameter("emailAddress");
            AddUsers addusers = new AddUsers(userName, emailAddress);

            HttpSession session = request.getSession();
            session.setAttribute("addusers", addusers);

            String sorry = "";
            try {
                //check that email address doesn't already exist
                boolean emailExists = RegisterDB.isMatch(conn, emailAddress);
                if (emailExists) {
                    session.setAttribute("sorry", "User already exists. Please try again.");
                    RequestDispatcher dispatcher =
                            getServletContext().getRequestDispatcher(
                                    "/sandbox/java-jsp/registerEntry.jsp");
                    dispatcher.forward(request, response);
                } else {
                    RegisterDB.addRecord(conn, addusers);
                    session.setAttribute("emailAddress", emailAddress);
                    RequestDispatcher dispatcher =
                            getServletContext().getRequestDispatcher(
                                    "/sandbox/java-jsp/registerEntry.jsp");
                    dispatcher.forward(request, response);
                }
            } catch (SQLException sqle) {
                sorry = "demoRegister SQLException: " + sqle;
                session.setAttribute("sorry", sorry);
                RequestDispatcher dispatcher =
                        getServletContext().getRequestDispatcher(
                                "/error.jsp");
                dispatcher.forward(request, response);
            }

            // servlet code ends here

        } catch (SQLException e) {
            throw new ServletException(e);
        } finally {
            try {
                if (conn != null)
                    conn.close();
            } catch (SQLException e) {
            }
        }
    }
}
