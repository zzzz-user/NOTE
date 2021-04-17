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

# 設定
git remote -v


# リポジトリ追加
git remote add origin https://github.com/＊＊＊＊＊＊＊.git


