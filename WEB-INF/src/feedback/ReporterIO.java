package feedback;

import java.io.*;
import java.util.*;


public class ReporterIO {
    public synchronized static void addRecord(Reporter reporter, String fileName) throws IOException {
        File file = new File(fileName);
        PrintWriter out = new PrintWriter(
                new FileWriter(file, true));
        out.println(reporter.getEMAIL() + "|"
                + reporter.getNAME() + "|"
                + reporter.getCOMMENTS() + "\r");

        out.close();
    }

    public static Reporter getReporter(String add2, String fileName) throws IOException {
        File file = new File(fileName);
        BufferedReader in = new BufferedReader(
                new FileReader(file));
        Reporter reporter = new Reporter();
        String line = in.readLine();
        while (line != null) {
            StringTokenizer t = new StringTokenizer(line, "|");
            String bubba = t.nextToken();
            if (bubba.equalsIgnoreCase(add2)) {
                String email = t.nextToken();
                String name = t.nextToken();
                String comments = t.nextToken();
                reporter.setEMAIL(email);
                reporter.setNAME(name);
                reporter.setCOMMENTS(comments);
            }
            line = in.readLine();
        }
        in.close();
        return reporter;
    }

    public synchronized static Vector readRecords(String file) throws IOException {
        Vector reporters = new Vector();
        BufferedReader in = new BufferedReader(
                new FileReader(file));
        String line = in.readLine();
        while (line != null) {
            StringTokenizer t = new StringTokenizer(line, "|");
            String email = t.nextToken();
            String name = t.nextToken();
            String comments = t.nextToken();
            Reporter reporter = new Reporter(email, name, comments);
            reporters.add(reporter);
            line = in.readLine();
        }
        in.close();
        return reporters;
    }
}
