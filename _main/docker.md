# docker

# version
docker version
docker-compose --version


# dockerHubを検索できる
docker search python3


# forWinでWindows、BIOS設定も確認
タスクマネージャ＞パフォーマンス＞CPU「仮想化：有効」の状態にする
検索「 仮想化　BIOS 」
AMDはAdvanced＞CPUConfiguration＞SVM「Enabled」

# volume一覧
docker volume ls

# volume指定して削除
docker volume rm project_db-data

# volumeまとめて削除
docker volume rm $(docker volume ls -qf dangling=true)

# リンク切れ削除？
docker volume ls -qf dangling=true | xargs -r docker volume rm

# 起動しているコンテナを確認
docker ps

# 停止しているコンテナを確認
docker ps -a

# コンテナを一括で削除する＞コンテナIDを一覧出力させて指定削除
docker rm `docker ps -a -q`

# イメージ一覧
docker images

# イメージを削除
docker rmi imageID

# イメージをまとめて削除
docker images -aq | xargs docker rmi

# 子イメージを確認
docker history imageID

# 実行
docker-compose up -d

# 実行、DcokerFile修正したらビルドし直す
docker-compose up -d --build

# コンテナに入る
docker-compose exec web bash

# コンテナを実行
docker-compose run --rm php pwd

# コンテナ停止
docker-compose kill

# コンテナ終了
docker-compose down

