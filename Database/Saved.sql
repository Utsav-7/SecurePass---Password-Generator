-- save generated password in database with username and id 
-- create a table using given query
CREATE TABLE passwords (
  id INT AUTO_INCREMENT,
  username VARCHAR(50) PRIMARY KEY NOT NULL,
  password VARCHAR(255) NOT NULL,
  strength INT NOT NULL
);
