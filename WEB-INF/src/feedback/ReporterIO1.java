package feedback;

import java.io.*;
import java.util.*;


public class ReporterIO1 {
    public synchronized static void addRecord(Reporter1 reporter1, String fileName) throws IOException {
        File file = new File(fileName);
        PrintWriter out = new PrintWriter(new FileWriter(file, true));
        out.println(reporter1.getIP() + "|"
                + reporter1.getNAME() + "|"
                + reporter1.getHOST() + "\r");

        out.close();
    }

    public static Reporter1 getReporter1(String add2, String fileName) throws IOException {
        File file = new File(fileName);
        BufferedReader in = new BufferedReader(new FileReader(file));
        Reporter1 reporter1 = new Reporter1();
        String line = in.readLine();
        while (line != null) {
            StringTokenizer t = new StringTokenizer(line, "|");
            String bubba = t.nextToken();
            if (bubba.equalsIgnoreCase(add2)) {
                String clientIP = t.nextToken();
                String clientHost = t.nextToken();
                String localName = t.nextToken();
                reporter1.setIP(clientIP);
                reporter1.setHOST(clientHost);
                reporter1.setNAME(localName);
            }
            line = in.readLine();
        }
        in.close();
        return reporter1;
    }

    public synchronized static Vector readRecords(String file) throws IOException {
        Vector reporters1 = new Vector();
        BufferedReader in = new BufferedReader(new FileReader(file));
        String line = in.readLine();
        while (line != null) {
            StringTokenizer t = new StringTokenizer(line, "|");
            String clientIP = t.nextToken();
            String clientHost = t.nextToken();
            String localName = t.nextToken();
            Reporter1 reporter1 = new Reporter1(clientIP, clientHost, localName);
            reporters1.add(reporter1);
            line = in.readLine();
        }
        in.close();
        return reporters1;
    }
}
