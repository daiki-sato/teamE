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
  official_link VARCHAR(100) NOT NULL,
  article_link VARCHAR(100) NOT NULL,
  memo VARCHAR(200),
  status BOOLEAN NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- INSERT INTO agents SET 
-- agent_name='キャリセン',
-- image_url='https://careecen-shukatsu-agent.com/wp-content/themes/thinktwice/assets/images/logo.png',
-- overview='株式会社シンクトワイスが運営する就職支援、新卒紹介のエージェントサービス。面接後にフィードバックをもらえる！自分に合った企業を見つけることができる！ESの添削、面接練習をすることで自信に繋がる！',
-- button_type=TRUE,
-- star=3.5,
-- offcial_link='https://careecen-shukatsu-agent.com/ ',
-- article_link='https://reashu.com/careecen-shukatsu-agent/',
-- status=TRUE;

INSERT INTO `agents` (`id`, `agent_name`, `image_url`, `overview`, `upper_limit`, `deadline`, `button_type`, `pickup`, `star`, `official_link`, `article_link`, `memo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'キャリセン', 'https://careecen-shukatsu-agent.com/wp-content/themes/thinktwice/assets/images/logo.png', '株式会社シンクトワイスが運営する就職支援、新卒紹介のエージェントサービス。面接後にフィードバックをもらえる！自分に合った企業を見つけることができる！ESの添削、面接練習をすることで自信に繋がる！', NULL, NULL, 1, NULL, 1, 'https://careecen-shukatsu-agent.com/ ', 'https://reashu.com/careecen-shukatsu-agent/', NULL, 0, '2021-05-22 04:35:50', '2021-05-22 04:35:50'),
(2, 'キャリアチケット', 'https://careerticket.jp/img/top_ogp.jpg', '参加企業が厳選されておりブラック企業を避けられる！\r\nエントリーシート（ES）や面接のフィードバックがもらえる！\r\n早めに内定を確保できる！', NULL, NULL, 1, NULL, 2, 'https://careerticket.jp/', 'https://reashu.com/carrer-ticket/', NULL, 0, '2021-05-27 03:35:51', '2021-05-27 03:35:51'),
(3, 'キャリセン2', 'https://careecen-shukatsu-agent.com/wp-content/themes/thinktwice/assets/images/logo.png', '株式会社シンクトワイスが運営する就職支援、新卒紹介のエージェントサービス。面接後にフィードバックをもらえる！自分に合った企業を見つけることができる！ESの添削、面接練習をすることで自信に繋がる！', NULL, NULL, 1, NULL, 3.5, 'https://careecen-shukatsu-agent.com/ ', 'https://reashu.com/careecen-shukatsu-agent/', NULL, 0, '2021-05-22 04:35:50', '2021-05-22 04:35:50'),
(4, 'キャリアチケット2', 'https://careerticket.jp/img/top_ogp.jpg', '参加企業が厳選されておりブラック企業を避けられる！\r\nエントリーシート（ES）や面接のフィードバックがもらえる！\r\n早めに内定を確保できる！', NULL, NULL, 1, NULL, 4, 'https://careerticket.jp/', 'https://reashu.com/carrer-ticket/', NULL, 0, '2021-05-27 03:35:51', '2021-05-27 03:35:51'),
(5, 'キャリセン3', 'https://careecen-shukatsu-agent.com/wp-content/themes/thinktwice/assets/images/logo.png', '株式会社シンクトワイスが運営する就職支援、新卒紹介のエージェントサービス。面接後にフィードバックをもらえる！自分に合った企業を見つけることができる！ESの添削、面接練習をすることで自信に繋がる！', NULL, NULL, 1, NULL, 4.5, 'https://careecen-shukatsu-agent.com/ ', 'https://reashu.com/careecen-shukatsu-agent/', NULL, 0, '2021-05-22 04:35:50', '2021-05-22 04:35:50'),
(6, 'キャリアチケット3', 'https://careerticket.jp/img/top_ogp.jpg', '参加企業が厳選されておりブラック企業を避けられる！\r\nエントリーシート（ES）や面接のフィードバックがもらえる！\r\n早めに内定を確保できる！', NULL, NULL, 1, NULL, 5, 'https://careerticket.jp/', 'https://reashu.com/carrer-ticket/', NULL, 0, '2021-05-27 03:35:51', '2021-05-27 03:35:51');


DROP TABLE IF EXISTS agent_tag_table;
CREATE TABLE agent_tag_table (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  agent_id INT NOT NULL,
  tag_id INT NOT NULL
);

INSERT INTO `agent_tag_table` (`id`, `agent_id`, `tag_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 2, 1),
(4, 3, 3),
(5, 4, 2),
(6, 4, 3),
(7, 6, 3);

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

INSERT INTO `tag_table` (`id`, `tag_name`) VALUES
(1, '理系'),
(2, '文系'),
(3, '星3以上'),
(4, '星4以上');

DROP TABLE IF EXISTS kw_table;
CREATE TABLE kw_table (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  kw_name VARCHAR(20) UNIQUE
);

INSERT INTO kw_table SET 
kw_name='おすすめ';
