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

# 確認
use mysql
select user, host, plugin from user;





=============================================================
# SQL
=============================================================
# insert
insert into [テーブル名] (col_name1, col_name2, ...) values ([値]);

# update
update [テーブル名] set [カラム名]=[値];

# delete
delete from [テーブル名] where [カラム名]=[値];

# alter
alter table [テーブル名] modify [カラム名] [型]
alter table [テーブル名] modify [カラム名] [型] not null;
# clear
truncate table [テーブル名];

# 詳細
desc [テーブル名]
show create table [テーブル名];



# table dump
mysqldump -u namae -t --compact db_name table_name --where='id=1';




=============================================================
# ポスグレ postgresql
```
create table column (
  id integer, 
  name varchar(10)
);
```

# 縦表示横表示の切り替え select前にエンター
\x

# テーブル一覧
\dt

# テーブル詳細
¥d table_name

# sql  カラム名はダブルコーテーションで囲うらしい
update deliverables set "public_at"='2019-03-01 10:00:00' where "id"=3;

# テーブルをカラにするが、インクリメントはリセットされない。
truncate table [テーブル名];
# シーケンス番号もリセットしたい場合
TRUNCATE TABLE [テーブル名] RESTART IDENTITY;

# where In
delete from USERS where "id" in (3, 2);



