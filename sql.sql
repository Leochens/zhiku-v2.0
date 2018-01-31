CREATE TABLE `zhiku`.`article` ( 
`id` INT(4) NOT NULL AUTO_INCREMENT,
`title` VARCHAR(200) NOT NULL DEFAULT '（无标题）',
`author` VARCHAR(32) NOT NULL , 
`dateline` INT NOT NULL DEFAULT 0, 
`content` TEXT NOT NULL ,
`tags` VARCHAR(64) NOT NULL , 
`pic_path` VARCHAR(500) NOT NULL ,
`comment` TEXT NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB, CHARSET = UTF8;


--制作管理员结构--
CREATE TABLE `zhiku`.`admin` (
`id` INT(4) NOT NULL AUTO_INCREMENT COMMENT '编号' ,
`username` VARCHAR(50) NOT NULL COMMENT '用户名' ,
`password` VARCHAR(64) NOT NULL COMMENT '密码' , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB,CHARSET = UTF8;