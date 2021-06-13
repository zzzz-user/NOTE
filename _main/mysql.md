# mysql

# version
mysql --version


# 再起動
service mysql restart


# command
show databases;
use database;
show tables;
desc auth_user;


# 接続
mysql -u root -h localhost
# pass混ぜて接続
mysql --host=localhost --user=user_name --password=password db_name


=============================================================
# SQL
=============================================================
# insert
insert into [テーブル名] values ([値]);
# update
update [テーブル名] set [カラム名]=[値];
# delete
delete from [テーブル名] where [カラム名]=[値];
# alter
alter table [テーブル名] modify [カラム名] [型]
alter table [テーブル名] modify [カラム名] [型] not null;
# clear
truncate table [テーブル名];

