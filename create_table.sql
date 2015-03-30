CREATE DATABASE careerprep CHARACTER SET utf8 COLLATE utf8_general_ci;
USE careerprep;
DROP TABLE IF EXISTS signups;
CREATE TABLE signups (
  signups_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  signup_email_address VARCHAR(120) NOT NULL,
  signup_date datetime DEFAULT NULL,
  signup_firstname VARCHAR(300) NOT NULL,
  signup_lastname VARCHAR(300) NOT NULL,
  signup_phone VARCHAR(300) NOT NULL,
  signup_street1 VARCHAR(300) NOT NULL,
  signup_street2 VARCHAR(300) NOT NULL,
  signup_city VARCHAR(300) NOT NULL,
  signup_state VARCHAR(300) NOT NULL,
  signup_zip VARCHAR(300) NOT NULL,
  signup_country VARCHAR(300) NOT NULL,
  signup_cardtype VARCHAR(300) NOT NULL,
  signup_cardnumber VARCHAR(300) NOT NULL,
  signup_cardname VARCHAR(300) NOT NULL,
  signup_cardexpiry VARCHAR(300) NOT NULL,
  signup_subs VARCHAR(300) NOT NULL,
  signup_freq VARCHAR(300) NOT NULL,
  PRIMARY KEY (signups_id)
)