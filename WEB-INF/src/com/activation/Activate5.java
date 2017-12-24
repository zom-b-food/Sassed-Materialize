package com.activation;

public class Activate5 {
    private String voicepurchase;
    private String datapurchase;
    private String textpurchase;
    private String costpurchase;

    public Activate5() {
        voicepurchase = "";
        datapurchase = "";
        textpurchase = "";
        costpurchase = "";

    }

    public Activate5(String pvoicepurchase, String pdatapurchase, String ptextpurchase, String pcostpurchase
    ) {
        voicepurchase = pvoicepurchase;
        datapurchase = pdatapurchase;
        textpurchase = ptextpurchase;
        costpurchase = pcostpurchase;

    }

    public void setvoicepurchase(String af) {
        voicepurchase = af;
    }

    public String getvoicepurchase() {
        return voicepurchase;
    }


    public void setdatapurchase(String ag) {
        datapurchase = ag;
    }

    public String getdatapurchase() {
        return datapurchase;
    }


    public void settextpurchase(String ah) {
        textpurchase = ah;
    }

    public String gettextpurchase() {
        return textpurchase;
    }


    public void setcostpurchase(String aj) {
        costpurchase = aj;
    }

    public String getcostpurchase() {
        return costpurchase;
    }

}
