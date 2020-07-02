#스키마 생성
CREATE DATABASE blog;
USE blog;
CREATE TABLE article (
   id INT(10) usigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
   regDate DATETIME NOT NULL,
   updateDate DATETIME NOT NULL,
   title CHAR(255) NOT NULL,
   `body` LONGTEXT NOT NULL
);

# 테스트 데이터 생성
INSERT INTO article SET regDate - NOW(), updateDate = NOW(),
title = '제목1', `body` = '# 내용 1';
INSERT INTO article SET regDate - NOW(), updateDate = NOW(),
title = '제목2', `body` = '# 내용 2';
INSERT INTO article SET regDate - NOW(), updateDate = NOW(),
title = '제목3', `body` = '# 내용 3';