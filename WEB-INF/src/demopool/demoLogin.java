package demopool;

import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import javax.naming.*;
import javax.sql.*;

public class demoLogin extends HttpServlet {
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
            Users users = new Users(userName, emailAddress);

            HttpSession session = request.getSession();
            session.setAttribute("users", users);

            String oops = "";
            try {
                //checks that email address and username exist in db
                boolean loginValid = LoginDB.isMatch(conn, userName, emailAddress);
                if (loginValid) {

                    session.setAttribute("emailAddress", emailAddress);
                    RequestDispatcher dispatcher =
                            getServletContext().getRequestDispatcher(
                                    "/sandbox/java-jsp/registerShow.jsp");
                    dispatcher.forward(request, response);
                } else {

                    session.setAttribute("oops", "<span class='error'>Please register first.</span>");
                    RequestDispatcher dispatcher =
                            getServletContext().getRequestDispatcher(
                                    "/sandbox/java-jsp/registerEntry.jsp");
                    dispatcher.forward(request, response);
                    session.invalidate();
                }
            } catch (SQLException sqle) {
                oops = "demoLogin SQLException: " + sqle;
                session.setAttribute("oops", oops);
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
