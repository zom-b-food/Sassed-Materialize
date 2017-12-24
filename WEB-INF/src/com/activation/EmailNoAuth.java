package com.activation;

import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
import java.net.InetAddress;
import java.util.Properties;
import java.util.Date;
import javax.mail.*;
import javax.mail.internet.*;

public class EmailNoAuth extends HttpServlet {
    public void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        PrintWriter out = response.getWriter();
        response.setContentType("text/html");

        try {
            Properties props = new Properties();
            props.put("mail.transport.protocol", "smtp");
            props.put("mail.smtp.host", "172.18.19.15");
            props.setProperty("mail.smtp.auth", "false");
            props.put("mail.smtp.port", "25");
            props.put("mail.smtp.starttls.enable", "true");

            Session sessmail = Session.getInstance(props, null);
            sessmail.setDebug(true);

            String s1 = request.getParameter("text1"); //sender (from)
            String s2 = request.getParameter("text2"); //to
            String s3 = request.getParameter("cc"); //cc
            String s4 = request.getParameter("subject"); //subject
            String s5 = request.getParameter("area1"); //comments

            MimeMessage msg = new MimeMessage(sessmail);

            msg.setFrom(new InternetAddress(s1));
            msg.setRecipients(Message.RecipientType.TO, InternetAddress.parse(s2, false));
            if (s3 != null)
                msg.setRecipients(Message.RecipientType.CC, InternetAddress.parse(s3, false));
            msg.setSubject(s4);
            msg.setText(s5);

            Transport transport = sessmail.getTransport("smtp");
            transport.send(msg);

            RequestDispatcher dispatcher =
                    getServletContext().getRequestDispatcher(
                            "/goodbye.jsp");
            dispatcher.forward(request, response);

            // out.println("Servletmail - Your email has been sent to " + s2 + s3);

            transport.close();

        } catch (Exception ex)

        {

            System.out.println("ERROR....." + ex);

        }


    }
}
