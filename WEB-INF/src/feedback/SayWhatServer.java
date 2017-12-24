package feedback;

import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class SayWhatServer extends HttpServlet {

    public void doGet(HttpServletRequest request,
                      HttpServletResponse response)
            throws IOException, ServletException {


        String name = request.getParameter("name");
        String email = request.getParameter("email");
        String comments = request.getParameter("comments");

        HttpSession session = request.getSession();
        Reporter reporter = (Reporter) session.getAttribute("reporter");
        if (reporter == null)
            reporter = new Reporter();


        reporter.setEMAIL(email);
        reporter.setNAME(name);
        reporter.setCOMMENTS(comments);


        ReporterIO.addRecord(reporter,
                "/home/toshi/public_html/adam-marsh.com/sources/feedback.txt");
        // "../webapps/war_adamm/feedback/choke.txt");

        session.setAttribute("reporter", reporter);

        RequestDispatcher dispatcher =
                getServletContext().getRequestDispatcher(
                        "/sandbox/java-jsp/show_feedback.jsp");
        dispatcher.forward(request, response);

    }

    public void doPost(HttpServletRequest request,
                       HttpServletResponse response)
            throws ServletException, IOException {
        doGet(request, response);
    }

}