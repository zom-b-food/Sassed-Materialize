package feedback;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import java.io.IOException;

public class ServerCookie1 extends HttpServlet {

    public void doGet(HttpServletRequest request, HttpServletResponse response)
            throws IOException, ServletException {


        String clientIP = request.getRemoteAddr();
        String clientHost = request.getRemoteHost();
        String localName  = request.getLocalName();

        HttpSession session = request.getSession();
        Reporter1 reporter1 = (Reporter1) session.getAttribute("reporter1");
        if (reporter1 == null)
            reporter1 = new Reporter1();


        reporter1.setIP(clientIP);
        reporter1.setHOST(clientHost);
        reporter1.setNAME(localName);


        ReporterIO1.addRecord(reporter1,
        //   "/home/toshi/public_html/ui-design-engineering.com/HHIT/samples.txt");
      	 "C:/Tomcat-7/webapps/ui-design-engineering/HHIT/samples.txt");

        session.setAttribute("reporter1", reporter1);

        /*RequestDispatcher dispatcher =
                getServletContext().getRequestDispatcher(
                        "/");
        dispatcher.forward(request, response);*/

    }

    public void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        doGet(request, response);
    }

}