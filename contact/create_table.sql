CREATE DATABASE icc_feedback CHARACTER SET utf8 COLLATE utf8_general_ci;
USE icc_feedback;
DROP TABLE IF EXISTS feedback;
CREATE TABLE feedback (
  feedback_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  feedback_email_address VARCHAR(120) NOT NULL,
  feedback_category VARCHAR(120) NOT NULL,
  feedback_subject VARCHAR(120) NOT NULL,
  feedback_feedback VARCHAR(120) NOT NULL,
  feedback_date datetime DEFAULT NULL,
  PRIMARY KEY (feedback_id)
)