package feedback;

public class Reporter {
    private String name;
    private String email;
    private String comments;

    public Reporter() {
    }

    public Reporter(String one, String two, String three) {
        email = one;
        name = two;
        comments = three;
    }

    public void setEMAIL(String f) {
        email = f;
    }

    public String getEMAIL() {
        return email;
    }

    public void setNAME(String l) {
        name = l;
    }

    public String getNAME() {
        return name;
    }

    public void setCOMMENTS(String e) {
        comments = e;
    }

    public String getCOMMENTS() {
        return comments;
    }
}
