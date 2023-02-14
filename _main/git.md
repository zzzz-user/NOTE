# git

# 最初にやる設定
git config --local user.name
git config --local user.email

git config --local user.name NAMAE
git config --local user.email sample@sample.com


# 接続確認
ssh -T git@github.com

# 【GitLab】ブラウザで改行コードによる差分を表示しない
URLにパラメ追加「?w=1」


# 強制リセット、リモートから持ってきて、HEADを移動させる
git fetch origin develop
git reset --hard origin/develop



# stash を戻したいとき
1. 検索
git fsck | awk '/dangling commit/ {print $3}'
2. 探す
git show --summary 
3. もどす
git cherry-pick -n -m1 aaaaaaaaaaaaabbbbbbbbbbbbbhhhhh


# 設定みる
git remote -v


# リポジトリ追加
git remote add origin https://github.com/＊＊＊＊＊＊＊.git

# 既存のリポジトリを変更
git remote set-url origin git@github.com:＊＊＊＊＊＊.git



# リモートブランチ取得（更新）
git fetch --prune


# 他のブランチのファイルを拾う
ブランチとファイルを指定して引っ張ってくる
git checkout master -- app/Test/User/Create.php



# 指定してPULL
git pull origin develop

# キーを一覧で確認
ls -al ~/.ssh


# ssh接続確認　？
ssh -i id_rsa.file [リモートユーザー]@[リモートサーバーのホスト名]


=============================================
## git[error]
=============================================
# たぶんプロジェクトに登録されてないやつ
Permission denied (publickey,gssapi-keyex,gssapi-with-mic).
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.



