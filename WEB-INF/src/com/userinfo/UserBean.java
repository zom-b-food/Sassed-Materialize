package com.userinfo;

import java.io.Serializable;

/**
 * This class contains information about a user. It's used to show
 * how a bean can be used to capture and validate user input.
 */
public class UserBean implements Serializable {
    // Properties
    private String userName;

    /**
     * Returns the userName property value
     */
    public String getUserName() {
        return (userName == null ? "" : userName);
    }

    /**
     * Sets the userName property value
     */
    public void setUserName(String userName) {
        this.userName = userName;
    }

}





