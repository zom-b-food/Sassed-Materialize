package authenticate;

import javax.mail.PasswordAuthentication;
import javax.mail.Authenticator;

/**
 * The class Authenticator represents an object that knows how to obtain authentication
 * for a network connection.
 * Applications use this class by creating a subclass, and registering an instance of that
 * subclass with the system with setDefault(). When authentication is required, the system
 * will invoke a method on the subclass (like getPasswordAuthentication)
 *
 * @author Paloma Trigueros Cabezon
 * @version 1.0
 */

public class SMTP2Authenticator extends javax.mail.Authenticator {

	String password = "";
	String username = "";

	public SMTP2Authenticator() {
		super();
	}

	public SMTP2Authenticator(String login, String pass) {
		super();
		this.username = username;
		this.password = password;
	}

	public PasswordAuthentication getPasswordAuthentication() {
		if (password.equals(""))
			return null;
		else
			return new PasswordAuthentication(username, password);
	}

}