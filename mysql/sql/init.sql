DROP SCHEMA IF EXISTS shukatsu;
CREATE SCHEMA shukatsu;
USE shukatsu;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  email VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO users SET email='testtest@com', password=sha1('password');

DROP TABLE IF EXISTS agents;
CREATE TABLE agents (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  agent_name VARCHAR(20) NOT NULL,
  image_url VARCHAR(100) NOT NULL,
  overview VARCHAR(200) NOT NULL,
  upper_limit INT,
  deadline DATE,
  button_type BOOLEAN NOT NULL,
  pickup BOOLEAN,
  star FLOAT NOT NULL,
  offcial_link VARCHAR(100) NOT NULL,
  article_link VARCHAR(100) NOT NULL,
  memo VARCHAR(200),
  status BOOLEAN NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO agents SET 
agent_name='キャリセン',
image_url='https://careecen-shukatsu-agent.com/wp-content/themes/thinktwice/assets/images/logo.png',
overview='株式会社シンクトワイスが運営する就職支援、新卒紹介のエージェントサービス。面接後にフィードバックをもらえる！自分に合った企業を見つけることができる！ESの添削、面接練習をすることで自信に繋がる！',
button_type=TRUE,
star=3.5,
offcial_link='https://careecen-shukatsu-agent.com/ ',
article_link='https://reashu.com/careecen-shukatsu-agent/',
status=TRUE;


DROP TABLE IF EXISTS agent_tag_table;
CREATE TABLE agent_tag_table (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  agent_id INT NOT NULL,
  tag_id INT NOT NULL
);

INSERT INTO agent_tag_table SET 
agent_id=1,
tag_id=2;

DROP TABLE IF EXISTS agent_kw_table;
CREATE TABLE agent_kw_table (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  agent_id INT NOT NULL,
  kw_id INT NOT NULL
);

INSERT INTO agent_kw_table SET 
agent_id=1,
kw_id=3;

DROP TABLE IF EXISTS tag_table;
CREATE TABLE tag_table (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  tag_name VARCHAR(20) UNIQUE
);

INSERT INTO tag_table SET 
tag_name='理系';

DROP TABLE IF EXISTS kw_table;
CREATE TABLE kw_table (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  kw_name VARCHAR(20) UNIQUE
);

INSERT INTO kw_table SET 
kw_name='おすすめ';
