package xml;

import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

import org.w3c.dom.*;

import javax.xml.parsers.*;
import javax.xml.transform.*;
import javax.xml.transform.dom.*;
import javax.xml.transform.stream.*;

public class XmlServlet extends HttpServlet {
    public void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter pw = response.getWriter();

        String filename = "";
        String airline = "";
        String flightnumber = "";
        String passengername = "";


        if (request.getParameter("FileName") != null && request.getParameter("AirLine") != null && request.getParameter("FlightNumber") != null && request.getParameter("PassengerName") != null)

        {
            filename = request.getParameter("FileName").toString();
            airline = request.getParameter("AirLine").toString();
            flightnumber = request.getParameter("FlightNumber").toString();
            passengername = request.getParameter("PassengerName").toString();
        }
        try {
            DocumentBuilderFactory builderFactory = DocumentBuilderFactory.newInstance();
            DocumentBuilder docBuilder = builderFactory.newDocumentBuilder();
            //creating a new instance of a DOM to build a DOM tree.
            Document doc = docBuilder.newDocument();
            new XmlServlet().createXmlTree(doc, filename, airline, flightnumber, passengername);

            RequestDispatcher dispatcher =
                    getServletContext().getRequestDispatcher(
                            "/sandbox/java-jsp/showXmlData.jsp");
            dispatcher.forward(request, response);
        } catch (Exception e) {
            System.out.println(e);
        }

    }

    public void createXmlTree(Document doc, String filename, String airline, String flightnumber, String passengername) throws Exception {
        //This method creates an element node
        Element root = doc.createElement("Flights");
        //adding a node after the last child node of the specified node.
        doc.appendChild(root);


        Element child1 = doc.createElement("FileName");
        root.appendChild(child1);

        Text text = doc.createTextNode(filename);
        child1.appendChild(text);

        Element element = doc.createElement("AirLine");
        root.appendChild(element);

        Text text1 = doc.createTextNode(airline);
        element.appendChild(text1);

        Element element1 = doc.createElement("FlightNumber");
        root.appendChild(element1);

        Text text2 = doc.createTextNode(flightnumber);
        element1.appendChild(text2);

        Element element2 = doc.createElement("PassengerName");
        root.appendChild(element2);

        Text text3 = doc.createTextNode(passengername);
        element2.appendChild(text3);


        //TransformerFactory instance is used to create Transformer objects.
        TransformerFactory factory = TransformerFactory.newInstance();
        Transformer transformer = factory.newTransformer();

        transformer.setOutputProperty(OutputKeys.INDENT, "yes");

        // create string from xml tree
        StringWriter sw = new StringWriter();
        StreamResult result = new StreamResult(sw);
        DOMSource source = new DOMSource(doc);
        transformer.transform(source, result);
        String xmlString = sw.toString();

        File file = new File("C:/Tomcat-7/webapps/ui-design-engineering/sources/xmldoc.xml");
        //   File file = new File("/home/toshi/public_html/ui-design-engineering.com/sources/xmldoc.xml");

        BufferedWriter bw = new BufferedWriter
                (new OutputStreamWriter(new FileOutputStream(file)));
        bw.write(xmlString);
        bw.flush();
        bw.close();

    }
}