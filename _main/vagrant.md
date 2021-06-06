# vagrant
# Virtual Box
両方インストール
両方最新を適用必須

# バージョン
vagrant --version

# command
vagrant plugin list
vagrant up
vagrant halt

# boxを削除してやり直す方法 (※未検証)
cd /c/vagrant/dirName
vagrant destroy
vagrant box remove boxName
上記で削除してやり直し。
cd /c/vagrant
vagrant box add dirName ./boxName.box

# boxをすべて削除
vagrant box list
vagrant box remove */*



===========================================================================
# Error
===========================================================================
# vagrant でエラー
ネットワーク設定から、ipv6のチェックを外す？


# > ==> homestead: Running provisioner: file...
Guest-specific operations were attempted on a machine that is not
ready for guest communication. This should not happen and a bug
should be reported.
以下を実行
```
$ vagrant plugin uninstall vagrant-vbguest
```

# homestead: SSH auth method: private keyで止まる
- vagrantとVBのバージョンを合わせる
- runnningになっているのを一度終了（poweroff）させてから、再度実行する
- Vagrantfileへ設定を追加する
```
    config.vm.boot_timeout = 600
```
