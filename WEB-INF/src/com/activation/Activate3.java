package com.activation;


public class Activate3 {
    private String sub1firstname;
    private String sub1lastname;
    private String sub1email;
    private String sub2firstname;
    private String sub2lastname;
    private String sub2email;
    private String new1no;
    private String port1notoport;
    private String new2no;
    private String port2notoport;


    public Activate3() {
        sub1firstname = "";
        sub1lastname = "";
        sub1email = "";
        sub2firstname = "";
        sub2lastname = "";
        sub2email = "";
        new1no = "";
        port1notoport = "";
        new2no = "";
        port2notoport = "";

    }

    public Activate3(String psub1firstname, String psub1lastname, String psub1email, String psub2firstname, String psub2lastname, String psub2email,
                     String pnew1no, String pport1notoport, String pnew2no, String pport2notoport
    ) {
        sub1firstname = psub1firstname;
        sub1lastname = psub1lastname;
        sub1email = psub1email;
        sub2firstname = psub2firstname;
        sub2lastname = psub2lastname;
        sub2email = psub2email;
        new1no = pnew1no;
        port1notoport = pport1notoport;
        new2no = pnew2no;
        port2notoport = pport2notoport;

    }

    public void setsub1firstname(String af) {
        sub1firstname = af;
    }

    public String getsub1firstname() {
        return sub1firstname;
    }


    public void setsub1lastname(String ag) {
        sub1lastname = ag;
    }

    public String getsub1lastname() {
        return sub1lastname;
    }


    public void setsub1email(String ah) {
        sub1email = ah;
    }

    public String getsub1email() {
        return sub1email;
    }


    public void setsub2firstname(String aj) {
        sub2firstname = aj;
    }

    public String getsub2firstname() {
        return sub2firstname;
    }

    public void setsub2lastname(String ak) {
        sub2lastname = ak;
    }

    public String getsub2lastname() {
        return sub2lastname;
    }

    public void setsub2email(String al) {
        sub2email = al;
    }

    public String getsub2email() {
        return sub2email;
    }


    public void setnew1no(String am) {
        new1no = am;
    }

    public String getnew1no() {
        return new1no;
    }

    public void setport1notoport(String an) {
        port1notoport = an;
    }

    public String getport1notoport() {
        return port1notoport;
    }


    public void setnew2no(String ao) {
        new2no = ao;
    }

    public String getnew2no() {
        return new2no;
    }

    public void setport2notoport(String ap) {
        port2notoport = ap;
    }

    public String getport2notoport() {
        return port2notoport;
    }


}
